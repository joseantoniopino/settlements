# Asentamientos Extraordinarios
**El sistema de generación de asentamientos funciona de la siguiente manera:**

- Existen diferentes tipos de asentamientos como por ejemplo los trading posts (puestos comerciales)
- Cada puesto comercial tiene diferentes características, como pueden ser:
  - Origin (Origen)
  - Speciality (Especialidad)
  - Age (Antigüedad)
  - Condition (Estado)
  - Visitor traffic (Afluencia de visitantes)
  - Size (Tamaño)
  - Environment (Entorno)
  - ...
- Cada especialidad es una tabla con un resultado de un dado (1d20, 1d8, etc.)
- Las tablas de especialidades podría tener las siguientes columnas:
  - Tipo de dado (d20, d8, d6, etc.)
  - Resultado (Accidental, Empresa comercial, Cruce de caminos)
  - Especial (Indica si este resultado variará el resultado en la tabla de otra característica o si hay que tirar en una subtabla)
  - Subtabla (Nombre de la subtabla.)
---

## Puestos comerciales:

### Origen

| d8 | Origen                                                                                                                                                                                                                  |
|----|-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| 1  | Accidental. El puesto comercial se creó por accidente, por ejemplo, después de que se averiase o perdiese una caravana. Las medidas que se tomaron para remediar el accidente acabaron dando lugar al puesto comercial. |
| 2  | Empresa comercial. Un emprendedor adinerado decidió fundar un puesto comercial.                                                                                                                                         |
| 3  | Cruce de caminos. El puesto comercial está en la intersección de varias de las principales rutas de comercio.                                                                                                           |
| 4  | Puesto militar. El puesto comercial se construyó en las ruinas de una antigua fortaleza o torre de guardia. Estas estructuras llevaban mucho tiempo abandonadas o los habitantes de la zona decidieron reutilizarlas.   |
| 5  | Tierra de nadie. El puesto comercial se ha establecido en una zona neutral, donde los ejércitos pueden comprar mercancías sin adentrarse en terreno enemigo.                                                            |
| 6  | Nativo. Alguien de la zona fundó el puesto comercial tras considerar que el comercio con la gente que pasaba por la zona tenía potencial.                                                                               |
| 7  | Parada nocturna. Originalmente el puesto comercial era una casa de gran tamaño que ofrecía estancias de una noche a viajeros cansados. El lugar pronto evolucionó como respuesta a la creciente demanda de alojamiento. |
| 8  | Experto en naturaleza. El puesto comercial fue fundado por un trampero, un cazador o un guía, que estableció un campamento para ayudar a quienes viajasen por la zona.                                                  |

### Especialidad

| d6 | Especialidad                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
|----|----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| 1  | Métodos de envío atípicos. A este puesto comercial se lo conoce por su forma única y efectiva de transportar mercancías.                                                                                                                                                                                                                                                                                                                                                                     |
| 2  | Comida y bebida. Al puesto comercial se lo conoce por [d6]:<br>1-3: Una comida excepcional<br>4-6: Gran surtido de bebidas variadas y de buena calidad                                                                                                                                                                                                                                                                                                                                       |
| 3  | Hospitalidad. La posada principal es de gran calidad y ofrece un servicio excelente, habitaciones cómodas y buena comida. (Si haces una tirada para saber la calidad de la posada utilizando la tabla de Calidad del paso 3, ignora los resultados que le atribuirían la calidad «pobre»).                                                                                                                                                                                                   |
| 4  | Información. Este puesto comercial es famoso por ser una buena fuente de información. Aunque las personas aquí no lo saben todo, existen muchas posibilidades de encontrarse con rumores verídicos, sabiduría tradicional, noticias o algún detalle interesante.                                                                                                                                                                                                                             |
| 5  | Contactos. El puesto comercial es famoso por contar con gente que sabe encontrar cosas. Si no tienen (o no saben) lo que estás buscando, te pueden recomendar a alguien.                                                                                                                                                                                                                                                                                                                     |
| 6  | Contratistas sin escrúpulos. Este puesto comercial es famoso por tener gente que puede hacer cualquier cosa si hay suficiente dinero de por medio. Lugar gratuito (servicio): Mercenarios [tira 1d10]:<br><br>1: Brutos y matones<br>2: Agentes clandestinos<br>3: Arqueros y honderos<br>4: Escribas y administrativos<br>5: Guías y rastreadores<br>6: Caravaneros y monturas<br>7: Académicos arcanos<br>8: Mercenarios mágicos<br>9: Orientación sacerdotal<br>10: Manos de la divinidad |

### Antigüedad

| d20   | Antigüedad                                                                                                        |
|-------|-------------------------------------------------------------------------------------------------------------------|
| 1-3   | Reciente. El puesto comercial se ha establecido hace menos de un año. (Tirada de afluencia de visitantes –1)      |
| 4-8   | Asentado. El puesto comercial lleva abierto al menos un par de años. (Tirada de afluencia de visitantes +0)       |
| 9-13  | Longevo. El puesto comercial se construyó hace décadas. (Tirada de afluencia de visitantes +1)                    |
| 14-17 | Viejo. El puesto comercial se construyó hace unos cien años. (Tirada de afluencia de visitantes +2)               |
| 18-19 | Antiguo. El puesto comercial se construyó hace siglos. (Tirada de afluencia de visitantes +3)                     |
| 20    | Desconocido. Nadie sabe cuánto tiempo lleva abierto este puesto comercial. (Tirada de afluencia de visitantes +4) |

### Estado

| d20   | Estado                                                                                                                                                                                                                     | Modificación a la Riqueza de la Población |
|-------|----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|-------------------------------------------|
| 1-2   | Destartalado. Parece que algunos de los edificios están a punto de venirse abajo y no hay ninguna carretera propiamente dicha, solo zonas que el tránsito ha convertido en caminos. (Tirada de riqueza de la población -6) | -6                                        |
| 3-6   | Pobre. Los edificios y sus alrededores están sucios y en mal estado. Las carreteras son de tierra e irregulares. (Tirada de riqueza de la población -3)                                                                    | -3                                        |
| 7-14  | Decente. Los edificios están limpios y decorados con sobriedad. Los caminos son de tierra aplastada o gravilla. (Tirada de riqueza de la población +0)                                                                     | 0                                         |
| 15-18 | Bueno. La mayoría de los edificios están bien cuidados y decorados con moderación. Los caminos son de adoquines o quizás de ladrillos baratos. (Tirada de riqueza de la población +3)                                      | +3                                        |
| 19-20 | Inmaculado. Las tiendas y casas están impecables, adornadas con un gusto exquisito, y los caminos son de piedras regulares y lisas. (Tirada de riqueza de la población +6)                                                 | +6                                        |


