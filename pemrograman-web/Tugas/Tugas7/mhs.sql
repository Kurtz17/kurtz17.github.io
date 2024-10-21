CREATE DATABASE mhs;

USE mhs;

CREATE TABLE identitas (
    npm VARCHAR(12) PRIMARY KEY,
    nama VARCHAR(20),
    alamat VARCHAR(100),
    jk CHAR(1), 
    tgl_lhr DATE,
    email VARCHAR(40)
);

CREATE TABLE users (
    username VARCHAR(20) PRIMARY KEY,
    pass VARCHAR(100),
    npm VARCHAR(12),
    level CHAR(1), 
    FOREIGN KEY (npm) REFERENCES identitas(npm) ON DELETE CASCADE
);

INSERT INTO identitas (npm, nama, alamat, jk, tgl_lhr, email) VALUES
('140810230022', 'Dafa Ghani', 'Jalan Ciwaruga', 'L', '2004-12-04', 'dafa@gmail.com'),
('140810230034', 'Dzaki Azahri', 'Jalan Abror', 'L', '2005-02-15', 'azhari@gmail.com'),
('140810230014', 'Muhammad Zahran', 'Jalan BuahBatu', 'L', '2005-04-18', 'zahran@gmail.com');

INSERT INTO users (username, pass, npm, level) VALUES
('Dafa', SHA1('dafaganteng'), '140810230022', '1'), 
('Dzaki', SHA1('abrorjaya'), '140810230034', '1'),
('Zahran', SHA1('crisbarenak'), '140810230014', '2');
