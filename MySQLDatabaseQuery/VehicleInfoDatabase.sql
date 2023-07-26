CREATE SCHEMA IF NOT EXISTS VehicleInfo;

USE VehicleInfo;

CREATE TABLE vehicles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    year INT NOT NULL,
    make VARCHAR(100) NOT NULL,
    model VARCHAR(100) NOT NULL,
    trim VARCHAR(100),
    msrp DECIMAL(10, 2) NOT NULL
);

INSERT INTO vehicleinfo.vehicles (year, make, model, trim, msrp)
VALUES
  (2021, 'Toyota', 'Camry', 'LE', 26980.00),
  (2022, 'Honda', 'Civic', 'EX', 24950.00),
  (2023, 'Ford', 'F-150', 'XLT', 41370.00),
  (2022, 'Chevrolet', 'Silverado', 'LTZ', 44995.00),
  (2021, 'Nissan', 'Rogue', 'SV', 28150.00),
  (2023, 'BMW', '3 Series', '330i', 42500.00),
  (2021, 'Audi', 'Q5', 'Premium', 44200.00),
  (2023, 'Mercedes-Benz', 'C-Class', 'C 300', 45500.00),
  (2022, 'Hyundai', 'Tucson', 'SEL', 27650.00),
  (2023, 'Kia', 'Seltos', 'S', 22790.00),
  (2022, 'Subaru', 'Outback', 'Limited', 36595.00),
  (2023, 'GMC', 'Acadia', 'SLT', 41695.00),
  (2021, 'Mazda', 'CX-5', 'Touring', 28110.00),
  (2023, 'Volkswagen', 'Tiguan', 'SE', 27895.00),
  (2022, 'Porsche', '911', 'Carrera S', 130650.00),
  (2023, 'Lexus', 'RX', '350', 47840.00),
  (2022, 'Jeep', 'Wrangler', 'Sahara', 37995.00),
  (2021, 'Ram', '1500', 'Laramie', 48295.00),
  (2023, 'Cadillac', 'XT5', 'Luxury', 45290.00),
  (2021, 'Volvo', 'XC60', 'Inscription', 43350.00),
  (2022, 'Tesla', 'Model 3', 'Long Range', 49000.00),
  (2023, 'Acura', 'MDX', 'Technology', 53950.00),
  (2021, 'Infiniti', 'Q50', 'Sensory', 46650.00),
  (2022, 'Jaguar', 'F-PACE', 'P340', 50490.00),
  (2023, 'Land Rover', 'Range Rover Evoque', 'SE', 46600.00),
  (2021, 'Lincoln', 'Navigator', 'Reserve', 87100.00),
  (2022, 'Bentley', 'Continental GT', 'V8', 207825.00),
  (2023, 'Rolls-Royce', 'Phantom', 'EWB', 532750.00),
  (2021, 'Ferrari', '488 GTB', null, 333350.00),
  (2022, 'Lamborghini', 'Aventador S', null, 417826.00),
  (2023, 'Bugatti', 'Chiron', 'Sport', 3600000.00),
  (2021, 'McLaren', '720S', null, 299000.00),
  (2022, 'Maserati', 'Quattroporte', 'S', 107080.00),
  (2023, 'Alfa Romeo', 'Giulia', 'Quadrifoglio', 74900.00),
  (2021, 'Lotus', 'Evora', 'GT', 98900.00),
  (2022, 'Polestar', '2', null, 59900.00),
  (2023, 'Koenigsegg', 'Jesko', null, 3600000.00),
  (2021, 'NIO', 'ES8', null, 67900.00),
  (2022, 'Rivian', 'R1T', 'Adventure', 73350.00),
  (2023, 'Lucid', 'Air', 'Grand Touring', 139000.00),
  (2021, 'Rimac', 'C_Two', null, 2000000.00),
  (2022, 'Byton', 'M-Byte', null, 45000.00),
  (2023, 'Canoo', 'Lifestyle Vehicle', null, 34000.00),
  (2021, 'Aston Martin', 'DBS Superleggera', null, 308115.00),
  (2022, 'Genesis', 'G70', '2.0T', 37250.00),
  (2023, 'Hummer', 'EV Pickup', 'Edition 1', 112595.00),
  (2021, 'Karma', 'Revero', 'GT', 125000.00),
  (2022, 'Rivian', 'R1S', 'Adventure', 70850.00),
  (2023, 'GMC', 'HUMMER EV SUV', 'Edition 1', 105595.00),
  (2021, 'Mercedes-Benz', 'AMG GT', 'GT C', 151350.00),
  (2022, 'Volvo', 'XC40 Recharge', 'R-Design', 56500.00),
  (2023, 'Porsche', 'Taycan', 'Turbo S', 185000.00),
  (2021, 'Audi', 'e-tron GT', 'Premium Plus', 99900.00),
  (2022, 'Ford', 'Mustang Mach-E', 'GT', 69995.00),
  (2023, 'BMW', 'i4', 'M50', 65500.00),
  (2021, 'Chevrolet', 'Bolt EV', null, 36495.00),
  (2022, 'Hyundai', 'Ioniq 5', 'Ultimate', 50000.00),
  (2023, 'Kia', 'EV6', 'GT-Line', 58000.00),
  (2021, 'Nissan', 'Leaf', 'SL Plus', 39585.00),
  (2022, 'Rivian', 'R2S', 'Explorer', 70850.00),
  (2023, 'Lucid', 'Gravity', 'Performance', 169000.00),
  (2021, 'Tesla', 'Model Y', 'Performance', 62990.00),
  (2022, 'Polestar', '1', null, 62500.00),
  (2023, 'Koenigsegg', 'Gemera', null, 2700000.00),
  (2021, 'Audi', 'Q4 e-tron', 'Prestige', 52100.00),
  (2022, 'Mercedes-Benz', 'EQS', '450+', 106000.00),
  (2023, 'BMW', 'iX', 'xDrive50', 85000.00),
  (2021, 'Chevrolet', 'Corvette Stingray', '3LT', 77045.00),
  (2022, 'Ford', 'Bronco', 'Wildtrak', 53590.00),
  (2023, 'Jeep', 'Grand Cherokee', 'Overland', 54550.00),
  (2021, 'Lexus', 'LC 500', 'Convertible', 101000.00),
  (2022, 'Maserati', 'MC20', null, 210000.00),
  (2023, 'Porsche', 'Cayman GT4 RS', null, 135000.00),
  (2021, 'Ferrari', '812 GTS', null, 399888.00),
  (2022, 'Lamborghini', 'Huracán', 'STO', 390000.00),
  (2023, 'Bugatti', 'La Voiture Noire', null, 18900000.00),
  (2021, 'McLaren', 'Artura', null, 225000.00),
  (2022, 'Mazda', 'MX-5 Miata', 'RF Grand Touring', 35220.00),
  (2023, 'Alfa Romeo', '4C Spider', 'Italia', 74240.00),
  (2021, 'Lotus', 'Elise', 'Sport 220', 57900.00),
  (2022, 'Acura', 'NSX', null, 157500.00),
  (2023, 'Toyota', 'Supra', '3.0 Premium', 56990.00),
  (2021, 'Chevrolet', 'Spark', '2LT', 18395.00),
  (2022, 'Honda', 'Fit', 'Sport', 19160.00),
  (2023, 'Ford', 'Fiesta', 'ST', 24375.00),
  (2021, 'Nissan', 'Versa', 'SR', 19770.00),
  (2022, 'Hyundai', 'Accent', 'Limited', 20600.00),
  (2023, 'Kia', 'Rio', 'SX', 21740.00),
  (2021, 'Mazda', 'Mazda3', '2.5 Turbo', 30050.00),
  (2022, 'Subaru', 'Impreza', 'Sport', 23395.00),
  (2023, 'Volkswagen', 'Golf GTI', 'Autobahn', 37195.00),
  (2021, 'Toyota', 'Corolla', 'XSE Apex', 28100.00),
  (2022, 'Honda', 'Civic Type R', null, 37500.00),
  (2023, 'Ford', 'Mustang', 'Mach 1', 53850.00),
  (2021, 'Nissan', '370Z', 'NISMO', 48100.00),
  (2022, 'Chevrolet', 'Camaro', 'SS', 42500.00),
  (2023, 'Subaru', 'BRZ', 'Limited', 33295.00),
  (2021, 'Toyota', 'GR Supra', '3.0', 56390.00),
  (2022, 'Mazda', 'MX-5 Miata RF', 'Grand Touring', 35670.00),
  (2023, 'Nissan', 'GT-R', 'Premium', 118490.00);
  
SELECT * FROM vehicleinfo.vehicles;

SELECT * FROM vehicleinfo.vehicles WHERE vehicleinfo.vehicles.id  = 1;

SELECT id FROM vehicleinfo.vehicles;

SELECT JSON_OBJECT(
        'id', vehicleinfo.vehicles.id) FROM vehicleinfo.vehicles WHERE vehicleinfo.vehicles.id = 1;

SELECT JSON_OBJECT(
        'id', vehicleinfo.vehicles.id,
        'year', vehicleinfo.vehicles.year,
        'make', vehicleinfo.vehicles.make,
        'model', vehicleinfo.vehicles.model,
        'trim', vehicleinfo.vehicles.trim,
        'msrp', vehicleinfo.vehicles.msrp) as Json1
        FROM vehicleinfo.vehicles WHERE vehicleinfo.vehicles.id = 1;

SELECT JSON_OBJECT(
        'id', vehicleinfo.vehicles.id,
        'year', vehicleinfo.vehicles.year,
        'make', vehicleinfo.vehicles.make,
        'model', vehicleinfo.vehicles.model,
        'trim', vehicleinfo.vehicles.trim,
        'msrp', vehicleinfo.vehicles.msrp) as Json1
        FROM vehicleinfo.vehicles;

/*INSERT INTO vehicleinfo.vehicles (year, make, model, trim, msrp)
VALUES
  (2020, "Kia", "K5", "GT-Line", 30000.00);*/
/*DROP table vehicleinfo.vehicles;*/

/*UPDATE vehicleinfo.vehicles
SET year = 2024,
    make = 'Toyota',
    model = 'Corolla',
    trim = 'SE',
    msrp = 29000.00
WHERE id = 1;*/

/*DELETE FROM vehicleinfo.vehicles WHERE vehicleinfo.vehicles.id = 101;*/
