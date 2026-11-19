### Creación de archivos
<p>
Algunos de los pasos que se hicieron para crear los archivos
</p>

-Git init
-Git status
-Git add
-Git commit -m
-Git push

**Entre otros comandos...**

# Base de datos de libros

---

#### Jueves 12 de Septiembre 2026

Creé un subdominio en la página de AwardSpace llamado **bibliopoppl0**.

Dentro de phpMyAdmin creé una nueva tabla llamadá **"libros"** donde agregué un código para la base de datos.

```
CREATE TABLE libros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(150) NOT NULL,
    autor VARCHAR(100) NOT NULL,
    isbn VARCHAR(20) NOT NULL,
    disponible INT DEFAULT 1
);
```

Guardé libros para tener de ejemplo con el siguiente código.

```
INSERT INTO libros (titulo, autor, isbn, disponible) VALUES
('Cien años de soledad', 'Gabriel García Márquez', '978-0307474728', 1),
('Don Quijote de la Mancha', 'Miguel de Cervantes', '978-8424937461', 1);
);
```
<img width="1919" height="713" alt="image" src="https://github.com/user-attachments/assets/ac26d200-f72a-4262-ba14-e70a43c0f0a9" />

---
- - -
## Visual Studio Code

**1.** Creé una carpeta llamada biblioteca en donde creé los demas archivos.

**2.** Implementé el código en el archivo `index.php`.

**3.** Implementé el código en el archivo `guardar.php`.

**4.** Implementé el código en el archivo `style.css`.

**5.** Implementé el código en el archivo `script.js`.

Subí los codigos a GitHub con un `README.md`.

---
- - -
#### Martes 17 de Septiembre 2026

## Botón Prestar / Devolver libro

**1.** Creé un nuevo archivo llamado `cambiarEstado.php` en la carpeta de biblioteca.

**2.** Agregué el código del `index.php` que agrega un botón que permite prestar o devolver un libro.

**3.** Agregué al final de `style.css` un código para darle diseño a los botones de prestar y devolver.
#### Miercoles 18 de Septiembre 2026
## Botón Descargar Manual
Dentro del `index.php` agregué un código que muestra un botón para descargar el manual de usuario
