CREATE TABLE track_order (
    order_id INT AUTO_INCREMENT PRIMARY KEY,
    process_number VARCHAR(50),  -- Voor procesnummer, pas het datatype aan indien nodig
    status VARCHAR(100)           -- Voor bestelstatus
);

INSERT INTO track_order (process_number, status) VALUES
('PN123456', 'In behandeling'),
('PN123457', 'Verzonden'),
('PN123458', 'Afgeleverd');
