Tenim una col·lecció d'Objectes Restaurant a la ciutat de Nueva York, i necessitem algunes consultes.... pots ajudar-nos?

/*Escriu una consulta per mostrar tots els documents en la col·lecció Restaurants
*/
db.Restaurants.find()

/*Escriu una consulta per mostrar el restaurant_id, name, borough i cuisine per tots els documents en la col·lecció Restaurants
*/
db.Restaurants.find({}, {restaurant_id:1 , name:1 , borough:1 , cuisine:1})

/*Escriu una consulta per mostrar el restaurant_id, name, borough i cuisine, però excloure el camp _id per tots els documents en la col·lecció Restaurants
*/
db.Restaurants.find({}, {restaurant_id:1 , name:1 , borough:1 , cuisine:1, _id:0})

/*Escriu una consulta per mostrar restaurant_id, name, borough i zip code, però excloure el camp _id per tots els documents en la col·lecció Restaurants
*/
db.Restaurants.find({}, {restaurant_id:1 , name:1 , borough:1 , "address.zipcode":1 , _id:0})

/*Escriu una consulta per mostrar tot els restaurants que estan en el Bronx
*/
db.Restaurants.find({borough: "Bronx"}, {restaurant_id:1 , name:1 , borough:1 , "address.zipcode":1 , _id:0})

/*Escriu una consulta per mostrar els primers 5 restaurants que estan en el Bronx
*/
db.Restaurants.find({borough: "Bronx"}, {restaurant_id:1 , name:1 , borough:1 , "address.zipcode":1 , _id:0}).limit(5)

/*Escriu una consulta per mostrar el pròxim 5 restaurants després de saltar els primers 5 del Bronx
*/
db.Restaurants.find({borough: "Bronx"}, {restaurant_id:1 , name:1 , borough:1 , "address.zipcode":1 , _id:0}).limit(5).skip(5)

/*Escriu una consulta per trobar els restaurants que tenen un score de més de 90
*/
db.Restaurants.find({"grades.score": {$gt:90}}, {_id:0, name:1, "grades.score": 1})

/*Escriu una consulta per trobar els restaurants que tenen un score de més que 80 però menys que 100
*/
db.Restaurants.find({ "grades.score": { $in: [81, 82, 83, 84, 85, 86, 87, 88, 89, 90 ,91, 92, 93, 94, 95, 96, 97, 98, 99]}}, {_id:0, name:1, "grades.score": 1})
/* NOTA IMPORTANT: 
les consultes
db.Restaurants.find({"grades.score": {$gt: 80, $lt: 100}}, {_id:0, name:1, "grades.score": 1})
db.Restaurants.find({ $and: [{"grades.score": {$gt: 80}}, {"grades.score": {$lt:100}}]}, {_id:0, name:1, "grades.score": 1}) 
no funcionen com sembla haurien de fer-ho, doncs inclouen el primer rest amb score 131.
Ver: https://www.oreilly.com/library/view/mongodb-the-definitive/9781449344795/ch04.html -> "Array and range query interactions"
*/

/*Escriu una consulta per trobar els restaurants quins localitzen en valor de latitud menys que -95.754168
*/
db.Restaurants.find({"address.coord.0": {$lt: -95.754168}})

/*Escriu una consulta de MongoDB per a trobar els restaurants que no preparen cap cuisine de 'American' i el seu puntaje de qualificació superior a 70 i latitud inferior a -65.754168
*/
db.Restaurants.find({cuisine: {$ne: "American "}, "address.coord.0": {$lt: -65.754168}, "grades.score": {$gt: 70}}, {cuisine: 1, "address.coord": 1, "grades.score": 1})

/*Escriu una consulta per trobar els restaurants quins no preparen cap cuisine de 'American' i va aconseguir un marcador més que 70 i localitzat en la longitud menys que -65.754168. Nota : Fes aquesta consulta sense utilitzar $and operador
*/
db.Restaurants.find({cuisine: {$ne: "American "}, "address.coord.0": {$lt: -65.754168}, "grades.score": {$gt: 70}}, {cuisine: 1, "address.coord": 1, "grades.score": 1})

/*Escriu una consulta per trobar els restaurants quins no preparen cap cuisine de 'American ' i va aconseguir un punt de grau 'A' no pertany a Brooklyn. S'ha de mostrar el document segons la cuisine en ordre descendent
*/
db.Restaurants.find({cuisine: {$ne: "American "}, borough: {$ne: "Brooklyn"}, "grades.grade": "A"}, {cuisine: 1, borough: 1, "grades.grade": 1}).sort({cuisine: -1})

/*Escriu una consulta per trobar el restaurant_id, name, borough i cuisine per a aquells restaurants quin contenir 'Wil' com les tres primeres lletres en el seu nom
*/
db.Restaurants.find({name: {$regex : "^Wil"}}, {restaurant_id:1, name:1, borough:1, cuisine:1, _id: 0})

/*Escriu una consulta per trobar el restaurant_id, name, borough i cuisine per a aquells restaurants quin contenir 'ces' com les últim tres lletres en el seu nom
*/
db.Restaurants.find({name: {$regex : "ces$"}}, {restaurant_id:1, name:1, borough:1, cuisine:1, _id: 0})

/*Escriu una consulta per trobar el restaurant_id, name, borough i cuisine per a aquells restaurants quin contenir 'Reg' com tres lletres en algun lloc en el seu nom
*/
db.Restaurants.find({name: {$regex : "Reg"}}, {restaurant_id:1, name:1, borough:1, cuisine:1, _id: 0})

/*Escriu una consulta per trobar els restaurants quins pertanyen al Bronx i va preparar qualsevol plat American o xinès
*/
db.Restaurants.find({borough: "Bronx", cuisine: {$in: ["American ", "Chinese"]}}, {restaurant_id:1, name:1, borough:1, cuisine:1, _id: 0}) 

/*Escriu una consulta per trobar el restaurant_id, name, borough i cuisine per a aquells restaurants que pertanyen a Staten Island o Queens o Bronxor Brooklyn
*/
db.Restaurants.find({borough: {$in: ["Bronx", "Staten Island", "Queens", "Brooklyn"]} }, {restaurant_id:1, name:1, borough:1, cuisine:1, _id: 0})

/*Escriu una consulta per trobar el restaurant_id, name, borough i cuisine per a aquells restaurants que no pertanyen a Staten Island o Queens o Bronxor Brooklyn
*/
db.Restaurants.find({borough: {$nin: ["Bronx", "Staten Island", "Queens", "Brooklyn"]} }, {restaurant_id:1, name:1, borough:1, cuisine:1, _id: 0})

/*Escriu una consulta per trobar el restaurant_id, name, borough i cuisine per a aquells restaurants que aconsegueixin un marcador quin no és més que 10
*/
db.Restaurants.find({"grades.score": {$lt: 10}}, {restaurant_id:1, name:1, borough:1, cuisine:1, grades:1, _id: 0})

/*Escriu una consulta per trobar el restaurant_id, name, borough i cuisine per a aquells restaurants que preparen peix excepte 'American' i 'Chinees' o el name del restaurant comença amb lletres 'Wil'
*/
/* NOTA: L'enunciat del que demana aquesta consulta no queda gens clar. 
Com es pot saber si preparen peix? perqué el tipus de cuina es Seafood? Llavors que vol dir excepte 'American' i 'Chinees'? es suposa que son tipus de cuina tambe... 
*/
db.Restaurants.find({$or: [{cuisine: "Seafood"}, {cuisine: {$in: ["American ", "Chinese"]}}, {name: {$regex : "^Wil"}}]}, {restaurant_id:1, name:1, borough:1, cuisine:1, _id: 0}).sort({name: -1})

/*Escriu una consulta per trobar el restaurant_id, name, i grades per a aquells restaurants que aconsegueixin un grau "A" i un score 11 en dades d'estudi ISODate "2014-08-11T00:00:00Z"
*/
db.Restaurants.find({$and: [{"grades.grade": "A"}, {"grades.score": 11}, {"grades.date": ISODate("2014-08-11T00:00:00Z")}]}, {restaurant_id:1, name:1, grades:1, _id: 0})

/*Escriu una consulta per trobar el restaurant_id, name i grades per a aquells restaurants on el 2n element de varietat de graus conté un grau de "A" i marcador 9 sobre un ISODate "2014-08-11T00:00:00Z"
*/
db.Restaurants.find({$and: [{"grades.1.grade": "A"}, {"grades.1.score": 9}, {"grades.date": ISODate("2014-08-11T00:00:00Z")}]}, {restaurant_id:1, name:1, grades:1, _id: 0})

/*Escriu una consulta per trobar el restaurant_id, name, adreça i ubicació geogràfica per a aquells restaurants on el segon element del array coord conté un valor quin és més que 42 i fins a 52
*/
db.Restaurants.find({$and: [{"address.coord.1": {$gt: 42}}, {"address.coord.1": {$lt: 52}}]}, {restaurant_id:1, name:1, "address.street":1, "address.coord":1, _id: 0})

/*Escriu una consulta per organitzar el nom dels restaurants en ordre ascendent juntament amb totes les columnes
*/
db.Restaurants.find({}).sort({name: 1})

/*Escriu una consulta per organitzar el nom dels restaurants en descendir juntament amb totes les columnes
*/
db.Restaurants.find({}).sort({name: -1})

/*Escriu una consulta a organitzar el nom de la cuisine en ordre ascendent i per el mateix barri de cuisine. Ordre descendint
*/
db.Restaurants.find({}).sort({cuisine: 1, borough: -1})

/*Escriu una consulta per saber tant si totes les direccions contenen el carrer o no
*/
db.Restaurants.find({$or: [{"address.street": null}, {"address.street": ""}]})

/*Escriu una consulta quin seleccionarà tots el documents en la col·lecció de restaurants on el valor del camp coord és Double
*/
db.Restaurants.find({"address.coord": {$type: "double"}})

/*Escriu una consulta quin seleccionarà el restaurant_id, name i grade per a aquells restaurants quins retorns 0 com a resta després de dividir el marcador per 7
*/
db.Restaurants.find({"grades.score": {$mod: [ 7, 0 ]}}, {restaurant_id:1, name:1, grades:1, _id:-1})

/*Escriu una consulta per trobar el name de restaurant, borough, longitud i altitud i cuisine per a aquells restaurants que contenen 'mon' com tres lletres en algun lloc del seu name
*/
db.Restaurants.find({name: {$regex : "mon"}}, {restaurant_id:1, name:1, borough:1, cuisine:1, "address.coord":1, _id: 0})

/*Escriu una consulta per trobar el name de restaurant, borough, longitud i latitud i cuisine per a aquells restaurants que conteinen 'Mad' com primeres tres lletres del seu name
*/
db.Restaurants.find({name: {$regex : "^Mad"}}, {restaurant_id:1, name:1, borough:1, cuisine:1, "address.coord":1, _id: 0})
