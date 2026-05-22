CREATE TABLE IF NOT EXISTS user_activity (
    user_id INT NOT NULL,
    table_name VARCHAR(50) NOT NULL,
    last_seen_id INT DEFAULT 0,
    PRIMARY KEY (user_id, table_name)
);