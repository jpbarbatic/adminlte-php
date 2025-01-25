SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `nombre_completo` varchar(255) NOT NULL,
  `puesto` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creado_en` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

INSERT INTO `usuarios` (`id`, `email`, `nombre_completo`, `puesto`, `password`, `creado_en`) VALUES
(1,	'admin@example.com',	'Administrador',	'Administrador',	'$2y$10$ayDWt9jAIzXs7Zug.i/pZeJxiGC/opzR./AHTDdmU5H8KCadMs9rq',	'2025-01-25 20:31:34'),
(2,	'juan.perez@example.com',	'Juan Pérez',	'Desarrollo web',	'$2y$10$ayDWt9jAIzXs7Zug.i/pZeJxiGC/opzR./AHTDdmU5H8KCadMs9rq',	'2025-01-25 20:31:34'),
(3,	'carla.gomez@example.com',	'Carla Gómez',	'Desarrollo web',	'$2y$10$ayDWt9jAIzXs7Zug.i/pZeJxiGC/opzR./AHTDdmU5H8KCadMs9rq',	'2025-01-25 20:31:34'),
(4,	'luis.martinez@example.com',	'Luis Martínez',	'Administración BBDD',	'$2y$10$ayDWt9jAIzXs7Zug.i/pZeJxiGC/opzR./AHTDdmU5H8KCadMs9rq',	'2025-01-25 20:31:34'),
(5,	'ana.torres@example.com',	'Ana Torres',	'RRHH',	'$2y$10$ayDWt9jAIzXs7Zug.i/pZeJxiGC/opzR./AHTDdmU5H8KCadMs9rq',	'2025-01-25 20:31:34'),
(6,	'pablo.garcia@example.com',	'Pablo García',	'',	'$2y$10$ayDWt9jAIzXs7Zug.i/pZeJxiGC/opzR./AHTDdmU5H8KCadMs9rq',	'2025-01-25 20:31:34'),
(7,	'laura.sanchez@example.com',	'Laura Sánchez',	'',	'$2y$10$ayDWt9jAIzXs7Zug.i/pZeJxiGC/opzR./AHTDdmU5H8KCadMs9rq',	'2025-01-25 20:31:34'),
(8,	'roberto.flores@example.com',	'Roberto Flores',	'',	'$2y$10$ayDWt9jAIzXs7Zug.i/pZeJxiGC/opzR./AHTDdmU5H8KCadMs9rq',	'2025-01-25 20:31:34'),
(9,	'carmen.ruiz@example.com',	'Carmen Ruiz',	'',	'$2y$10$ayDWt9jAIzXs7Zug.i/pZeJxiGC/opzR./AHTDdmU5H8KCadMs9rq',	'2025-01-25 20:31:34'),
(10,	'andres.fernandez@example.com',	'Andrés Fernández',	'',	'$2y$10$ayDWt9jAIzXs7Zug.i/pZeJxiGC/opzR./AHTDdmU5H8KCadMs9rq',	'2025-01-25 20:31:34');
