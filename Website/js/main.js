let appointmentType = "consultation";
function closeEnquirySuccess(){
  document.getElementById("enquirySuccessModal").classList.remove("active");
  document.body.classList.remove("modal-open");
}
document.addEventListener("DOMContentLoaded", function () {
  function sendForm(url, formData, onSuccess, onError){
  fetch(url, {
    method: "POST",
    body: formData
  })
  .then(res => res.text())
  .then(data => {
    if(data.trim() === "success"){
      onSuccess();
    } else {
      alert(data);
      if(onError) onError();
    }
  })
  .catch(err => {
    console.error(err);
    alert("Something went wrong.");
    if(onError) onError();
  });
}

  // ===============================
  // INIT FORMS
  // ===============================
  initializeEnquiryForm();
  initializeRecruitmentForm();
  initializeApplyForm();
  initializeConsultationForm();
  setMinDate();
  const dateInput = document.getElementById("callDate");
const timeInput = document.getElementById("consultTime");

if (dateInput && timeInput) {
  dateInput.addEventListener("change", function () {
    const selectedDate = this.value;
    const today = new Date();

    const yyyy = today.getFullYear();
    const mm = String(today.getMonth() + 1).padStart(2, '0');
    const dd = String(today.getDate()).padStart(2, '0');

    const todayStr = `${yyyy}-${mm}-${dd}`;

    if (selectedDate === todayStr) {
      // If today → restrict past time
      const hours = String(today.getHours()).padStart(2, '0');
      const minutes = String(today.getMinutes()).padStart(2, '0');

      const currentTime = `${hours}:${minutes}`;
      timeInput.setAttribute("min", currentTime);
    } else {
      // Future date → reset min time
      timeInput.setAttribute("min", "10:00");
    }
  });
}
  const counters = document.querySelectorAll(".counter");

  let started = false; // prevents multiple runs
  const startCounter = () => {
  counters.forEach(counter => {

    const target = Number(counter.getAttribute("data-target"));
    let count = 0;
    const increment = target / 100;

    const updateCounter = () => {
      count += increment;

      if (count < target) {
        counter.innerText = Math.ceil(count);
        requestAnimationFrame(updateCounter);
      } else {
        counter.innerText = target;
      }
    };

    updateCounter();
  });
};
// OBSERVER
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting && !started) {
        startCounter();
        started = true;
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.5
  });

  // Target the stats section
  const statsSection = document.querySelector(".stats-section");
  if (statsSection && counters.length > 0) {
  observer.observe(statsSection);
}

// ===============================
// DATE VALIDATION
// ===============================
    function setMinDate() {
  const dateInput = document.getElementById("callDate");

  if (!dateInput) return;

  const today = new Date();
  
  // Format YYYY-MM-DD properly
  const yyyy = today.getFullYear();
  const mm = String(today.getMonth() + 1).padStart(2, '0');
  const dd = String(today.getDate()).padStart(2, '0');

  const minDate = `${yyyy}-${mm}-${dd}`;

  dateInput.setAttribute("min", minDate);
}
// ===============================
// RECRUITMENT FORM
// ===============================
function initializeRecruitmentForm(){

  const form = document.getElementById("recruitment");

  if(form && !form.dataset.initialized){

    form.dataset.initialized = "true";

    form.addEventListener("submit", function(e){

      e.preventDefault();
      const btn = form.querySelector("button");
btn.disabled = true;
btn.innerText = "Submitting...";

      const formData = new FormData(form);
      sendForm("../PHP/recruitment.php", formData, () => {
  document.getElementById("enquirySuccessModal").classList.add("active");
  form.reset();
  btn.disabled = false;
btn.innerText = "Submit";
}, () => {
  // 🔥 ADD THIS
  btn.disabled = false;
  btn.innerText = "Submit";
});
    });

  }
}

// ===============================
// APPLY FORM
// ===============================
function initializeApplyForm(){

  const form = document.getElementById("loanForm");

  if(form && !form.dataset.initialized){

    form.dataset.initialized = "true";

    form.addEventListener("submit", function(e){

      e.preventDefault();
      const btn = form.querySelector("button");
btn.disabled = true;
btn.innerText = "Submitting...";
      const formData = new FormData(form);
      sendForm("/LoanExpertsWebsite/Website/PHP/apply_form.php", formData, () => {
        const formSection = document.getElementById("formSection");
  const successMsg = document.getElementById("success-message");

  if (formSection) formSection.style.display = "none";
  if (successMsg) successMsg.style.display = "flex";

  form.reset();
  btn.disabled = false;
    btn.innerText = "Submit";
    }, () => {
  // 🔥 ADD THIS
  btn.disabled = false;
  btn.innerText = "Submit";

});

    });

  }
}
 // ===== ABOUT SECTION ANIMATION =====
const aboutElements = document.querySelectorAll(".about-left, .about-right");

if (aboutElements.length > 0) {

  const aboutObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("show");
      } else {
        entry.target.classList.remove("show");
      }
    });
  }, { threshold: 0.3 });

  aboutElements.forEach(el => aboutObserver.observe(el));
}
// ===============================
// CONSULTATION + APPOINTMENT FORM
// ===============================
function initializeConsultationForm(){

  const form = document.getElementById("consultForm");

  if(form && !form.dataset.initialized){

    form.dataset.initialized = "true";

    form.addEventListener("submit", function(e){

      e.preventDefault();
      const btn = form.querySelector("button");
btn.disabled = true;
btn.innerText = "Submitting...";

      const formData = new FormData(form);

      const url = appointmentType === "appointment"
  ? "/LoanExpertsWebsite/Website/PHP/appointment_form.php"
  : "/LoanExpertsWebsite/Website/PHP/consultation_form.php";
        sendForm(url, formData, () => {

  const formSection = document.getElementById("consultFormSection");
  if (formSection) formSection.style.display = "none";

  const successBox = document.getElementById("thankYouMessage");

  if (successBox) {
    const successText = successBox.querySelector("p");

    if (!successText) {
      successBox.style.display = "flex";
      return;
    }

    if (appointmentType === "appointment") {
      successText.innerHTML = `
        Your appointment has been scheduled at our office.<br><br>
        <strong>Address:</strong> Opposite Municipal Corporation, B-Block Ranjit Avenue, Amritsar
      `;
    } else {
      successText.textContent =
        "Your consultation call has been scheduled. Our experts will connect with you at your selected date and time.";
    }

    successBox.style.display = "flex";
  }

  form.reset();
  btn.disabled = false;
  btn.innerText = "Submit";
  }, () => {
  // 🔥 ADD THIS
  btn.disabled = false;
  btn.innerText = "Submit";

});
    });
  }
}

// ===============================
// ENQUIRY FORM
// ===============================
function initializeEnquiryForm(){

  const form = document.getElementById("enquiryForm");

  if(form && !form.dataset.initialized){

    form.dataset.initialized = "true";

    form.addEventListener("submit", function(e){

      e.preventDefault();
      const btn = form.querySelector("button");
btn.disabled = true;
btn.innerText = "Submitting...";

      const formData = new FormData(form);
      sendForm("/LoanExpertsWebsite/Website/PHP/enquiry_form.php", formData, () => {
  showEnquirySuccess();
  form.reset();
  btn.disabled = false;
btn.innerText = "Submit";
}, () => {
  // 🔥 ADD THIS
  btn.disabled = false;
  btn.innerText = "Submit";
});
    });

  }
}

function showEnquirySuccess(){
  document.getElementById("enquirySuccessModal").classList.add("active");
  document.body.classList.add("modal-open");
}

function closeEnquirySuccess(){
  document.getElementById("enquirySuccessModal").classList.remove("active");
  document.body.classList.remove("modal-open");
}
 // ===============================
// FAQ TOGGLE
// ===============================
if (document.querySelector(".faq-section")) {
  const questions = document.querySelectorAll(".faq-question");

questions.forEach(q => {
  q.addEventListener("click", () => {
    const answer = q.nextElementSibling;
if (!answer || !answer.classList.contains("faq-answer")) return;

    if (!answer) return;

    const isOpen = answer.style.display === "block";

    document.querySelectorAll(".faq-answer").forEach(a => a.style.display = "none");

    answer.style.display = isOpen ? "none" : "block";
  
  });
});
};
// ===============================
// FIX SUCCESS MODAL CLOSE (FINAL)
// ===============================
const successModal = document.getElementById("enquirySuccessModal");
const closeBtn1 = document.querySelector(".close-success-modal");
const closeBtn2 = document.getElementById("closeSuccessModalBtn");

if (closeBtn1) {
  closeBtn1.addEventListener("click", function(){
    closeEnquirySuccess();
  });
}

if (closeBtn2) {
  closeBtn2.addEventListener("click", function(){
    closeEnquirySuccess();
  });
}

// CLICK OUTSIDE MODAL
if (successModal) {
  successModal.addEventListener("click", function(e){
    if (e.target === successModal) {
      closeEnquirySuccess();
    }
  });
}
});

// ===============================
// OPEN MODAL
// ===============================
window.openAppointment = function(type = "consultation"){

  appointmentType = type;
  const modal = document.getElementById("consultModal");
  if (!modal) return;
  modal.classList.add("active");
  document.body.classList.add("modal-open");
  const heading = document.querySelector(".consult-box h2");
  const submitBtn = document.getElementById("submitBtn");

  if(heading){
    heading.textContent = type === "appointment"
      ? "Schedule an Appointment"
      : "Schedule a Free Consultation";
  }

  if(submitBtn){
    submitBtn.textContent = type === "appointment"
      ? "Schedule an Appointment"
      : "Schedule a Call";
  }
  const thankYou = document.getElementById("thankYouMessage");
  const formSection = document.getElementById("consultFormSection");

  if (thankYou) thankYou.style.display = "none";
  if (formSection) formSection.style.display = "block";
}

// ===============================
// CLOSE MODAL
// ===============================
function closeConsultForm(){
  const modal = document.getElementById("consultModal");

if (modal) {
  modal.classList.remove("active");
}
const thankYou = document.getElementById("thankYouMessage");
const formSection = document.getElementById("consultFormSection");
if (thankYou) thankYou.style.display = "none";
if (formSection) formSection.style.display = "block";
}

// ===============================
  // LOGO ANIMATION FIX
  // ===============================
  window.addEventListener("load", function(){

    const video = document.getElementById("introVideo");
    const intro = document.getElementById("intro");
    const main = document.getElementById("main-content");
if (!main) return;

if (!intro) {
  main.classList.add("show-content");
  return;
}

    function hideIntro(){
      intro.classList.add("fade-out");

      setTimeout(function(){
        intro.style.display = "none";
  main.style.display = "block";
  main.classList.add("show-content");
}, 800);
    }

    if(video){
      video.play().catch(()=>{});
      video.addEventListener("ended", hideIntro);
      video.addEventListener("error", hideIntro);
    }

    setTimeout(hideIntro, 3000); // fallback
  });
  
// ===============================
// OUTSIDE CLICK CLOSE
// ===============================
document.addEventListener("click", function(e){
  // ===============================
// LOGIN MODAL HANDLING (FIX)
// ===============================

// Login button
if (e.target.id === "goToLogin") {
  window.location.href = "/LoanExpertsWebsite/Website/PHP/login.php";
}

// Cancel button
if (e.target.id === "cancelLogin") {
  document.getElementById("loginRequiredModal").style.display = "none";
}

// Close (X)
if (e.target.classList.contains("close-login-modal")) {
  document.getElementById("loginRequiredModal").style.display = "none";
}

// Click outside modal
if (e.target.id === "loginRequiredModal") {
  e.target.style.display = "none";
}

  if(e.target.classList.contains("close-consult")){
    closeConsultForm();
  }

  if(e.target.id === "consultModal"){
    closeConsultForm();
  }

  // CONSULTATION BUTTON (ABOUT PAGE)
const consultBtn = e.target.closest(".consultation-btn");
if (consultBtn) {
  e.preventDefault();
  openAppointment("consultation");
}
  // APPLY BUTTON
  const applyBtn = e.target.closest(".open-apply");
if (applyBtn) {

  fetch('/LoanExpertsWebsite/Website/PHP/check_login.php')
    .then(res => res.json())
    .then(data => {
      if (!data.loggedIn) {
  document.getElementById("loginRequiredModal").style.display = "flex";
  return;
}

      // ✅ Logged in → open form
      const modal = document.getElementById("applyForm");
      if (modal) modal.style.display = "flex";

    })
    .catch(err => {
      console.error("Login check failed:", err);
      alert("Something went wrong. Try again.");
    });
}
// CLOSE APPLY FORM (GLOBAL MODAL)
const closeApplyBtn = e.target.closest(".close-apply");
if (closeApplyBtn) {
  const modal = document.getElementById("applyForm");
  if (modal) modal.style.display = "none";
}
// CLICK OUTSIDE APPLY MODAL
if (e.target.id === "applyForm") {
  e.target.style.display = "none";
}

  // SCHEDULE BUTTON
  const scheduleBtn = e.target.closest(".appointment-btn");
  if (scheduleBtn) {
    e.preventDefault();
    openAppointment("appointment");
  }
  // ===============================
  // RESUME FILE UPLOAD UI
  // ===============================
  const resumeInput = document.getElementById("resumeInput");
  const fileText = document.getElementById("fileText");

  if (resumeInput && fileText) {
    resumeInput.addEventListener("change", function () {
      if (this.files.length > 0) {
        const file = this.files[0];

        fileText.innerHTML = `✔ ${file.name}`;
        fileText.style.color = "#28a745";
        fileText.style.fontWeight = "600";
      }
    });
  }

});
