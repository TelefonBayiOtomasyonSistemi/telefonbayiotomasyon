CREATE DATABASE telefon_veritabani;
CREATE TABLE telefonmod (
    id INT AUTO_INCREMENT PRIMARY KEY,
    marka VARCHAR(50),
    model VARCHAR(50),
    stok INT,
    ram varchar(8),
    depolama varchar(10),
    islemci varchar(50),
    kamera varchar(16),
    fiyat DECIMAL(10, 2)
);

INSERT INTO telefonmod (marka, model, ozellikler, fiyat) VALUES
('Samsung', 'Galaxy S20', 'Ekran Boyutu: 6.2 inç, İşlemci: Snapdragon 865, RAM: 8GB, Depolama: 128GB', 2999.99),
('Apple', 'iPhone 12', 'Ekran Boyutu: 6.1 inç, İşlemci: A14 Bionic, RAM: 4GB, Depolama: 64GB', 4299.99),
('Xiaomi', 'Redmi Note 10', 'Ekran Boyutu: 6.43 inç, İşlemci: Snapdragon 678, RAM: 4GB, Depolama: 128GB', 1899.99);

SELECT * FROM telefonmod;

DELETE FROM telefonlmod WHERE marka = 'Samsung' AND model = 'Galaxy S20';

UPDATE telefonmod SET fiyat = 1999.99 WHERE marka = 'Xiaomi' AND model = 'Redmi Note 10';