# Información sobre la Base de Datos

La base de datos está creada en [phpMyAdmin](http://localhost/phpmyadmin).

Para este ejercicio, se creó la base de datos **ciudades** y se trabajó con la tabla **ciudad_1**, que fue creada con la siguiente sentencia SQL:

```sql
CREATE TABLE ciudad_1 (
    id VARCHAR(8) PRIMARY KEY,
    ciudad VARCHAR(40) NOT NULL,
    pais VARCHAR(40) NOT NULL,
    habitantes VARCHAR(40) NOT NULL,
    superficie VARCHAR(40) NOT NULL
    metro VARCHAR(40) NOT NULL
);
```