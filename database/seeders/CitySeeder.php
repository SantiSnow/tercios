<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cities')->insert(
            [
                ["id" => rand(100000, 999999), "name"=> "Retiro", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "San Nicolás", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Puerto Madero", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "San Telmo", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Montserrat", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Constitución", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Recoleta", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Balvanera", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "San Cristóbal", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "La Boca", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Barracas", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Parque Patricios", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Nueva Pompeya", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Almagro", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Boedo", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Caballito", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Flores", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Parque Chacabuco", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Villa Soldati", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Villa Riachuelo", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Villa Lugano", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Liniers", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Mataderos", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Parque Avellaneda", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Villa Real", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Monte Castro", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Versalles", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Floresta", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Vélez Sarsfield", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Villa Luro", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Villa General Mitre", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Villa Devoto", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Villa del Parque", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Villa Santa Rita", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Coghlan", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Saavedra", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Villa Urquiza", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Villa Pueyrredón", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Núñez", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Belgrano", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Colegiales", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Palermo", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Chacarita", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Villa Crespo", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "La Paternal", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Villa Ortúzar", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Agronomía", "estate_id"=> 2],
                ["id" => rand(100000, 999999), "name"=> "Parque Chas", "estate_id"=> 2],
                [
                    "id"=> 6007,
                    "name"=> "Partido de Adolfo Alsina",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6014,
                    "name"=> "Partido de Adolfo Gonzales Chaves",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6021,
                    "name"=> "Partido de Alberti",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6028,
                    "name"=> "Partido de Almirante Brown",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6035,
                    "name"=> "Partido de Avellaneda",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6042,
                    "name"=> "Partido de Ayacucho",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6049,
                    "name"=> "Partido de Azul",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6056,
                    "name"=> "Partido de Bahía Blanca",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6063,
                    "name"=> "Partido de Balcarce",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6070,
                    "name"=> "Partido de Baradero",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6077,
                    "name"=> "Partido de Arrecifes",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6084,
                    "name"=> "Partido de Benito Juárez",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6091,
                    "name"=> "Partido de Berazategui",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6098,
                    "name"=> "Partido de Berisso",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6105,
                    "name"=> "Partido de San Bolívar",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6112,
                    "name"=> "Partido de Bragado",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6119,
                    "name"=> "Partido de Brandsen",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6126,
                    "name"=> "Partido de Campana",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6134,
                    "name"=> "Partido de Cañuelas",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6140,
                    "name"=> "Partido de Capitán Sarmiento",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6147,
                    "name"=> "Partido de Carlos Casares",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6154,
                    "name"=> "Partido de Carlos Tejedor",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6161,
                    "name"=> "Partido de Carmen de Areco",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6168,
                    "name"=> "Partido de Castelli",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6175,
                    "name"=> "Partido de Colón",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6182,
                    "name"=> "Partido de Coronel de Marina Leonardo Rosales",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6189,
                    "name"=> "Partido de Coronel Dorrego",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6196,
                    "name"=> "Partido de Coronel Pringles",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6203,
                    "name"=> "Partido de Coronel Suárez",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6210,
                    "name"=> "Partido de Chacabuco",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6217,
                    "name"=> "Partido de Chascomús",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6224,
                    "name"=> "Partido de Chivilcoy",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6231,
                    "name"=> "Partido de Daireaux",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6238,
                    "name"=> "Partido de Dolores",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6245,
                    "name"=> "Partido de Ensenada",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6252,
                    "name"=> "Partido de Escobar",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6260,
                    "name"=> "Partido de Esteban Echeverría",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6266,
                    "name"=> "Partido de Exaltación de la Cruz",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6270,
                    "name"=> "Partido de José M. Ezeiza",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6274,
                    "name"=> "Partido de Florencio Varela",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6277,
                    "name"=> "Partido de Florentino Ameghino",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6280,
                    "name"=> "Partido de General Alvarado",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6287,
                    "name"=> "Partido de General Alvear",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6294,
                    "name"=> "Partido de General Arenales",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6301,
                    "name"=> "Partido de General Belgrano",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6308,
                    "name"=> "Partido de General Guido",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6315,
                    "name"=> "Partido de General Juan Madariaga",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6322,
                    "name"=> "Partido de General La Madrid",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6329,
                    "name"=> "Partido de General Las Heras",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6336,
                    "name"=> "Partido de General Lavalle",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6343,
                    "name"=> "Partido de General Paz",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6351,
                    "name"=> "Partido de General Pinto",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6357,
                    "name"=> "Partido de General Pueyrredón",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6364,
                    "name"=> "Partido de General Rodríguez",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6371,
                    "name"=> "Partido de Ciudad Libertador San Martín",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6385,
                    "name"=> "Partido de General Viamonte",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6392,
                    "name"=> "Partido de General Villegas",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6399,
                    "name"=> "Partido de Guaminí",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6406,
                    "name"=> "Partido de Hipólito Yrigoyen",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6408,
                    "name"=> "Partido de Hurlingham",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6410,
                    "name"=> "Partido de Ituzaingó",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6412,
                    "name"=> "Partido de José C. Paz",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6413,
                    "name"=> "Partido de Junín",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6420,
                    "name"=> "Partido de La Costa",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6427,
                    "name"=> "Partido de La Matanza",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6434,
                    "name"=> "Partido de Lanús",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6441,
                    "name"=> "Partido de La Plata",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6448,
                    "name"=> "Partido de Laprida",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6455,
                    "name"=> "Partido de Las Flores",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6462,
                    "name"=> "Partido de Leandro N. Alem",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6466,
                    "name"=> "Partido de Lezama",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6469,
                    "name"=> "Partido de Lincoln",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6476,
                    "name"=> "Partido de Lobería",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6483,
                    "name"=> "Partido de Lobos",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6490,
                    "name"=> "Partido de Lomas de Zamora",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6497,
                    "name"=> "Partido de Luján",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6505,
                    "name"=> "Partido de Magdalena",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6511,
                    "name"=> "Partido de Maipú",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6515,
                    "name"=> "Partido de Malvinas Argentinas",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6518,
                    "name"=> "Partido de Mar Chiquita",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6525,
                    "name"=> "Partido de Marcos Paz",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6532,
                    "name"=> "Partido de Mercedes",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6539,
                    "name"=> "Partido de Merlo",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6547,
                    "name"=> "Partido de Monte",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6553,
                    "name"=> "Partido de Monte Hermoso",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6560,
                    "name"=> "Partido de Moreno",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6568,
                    "name"=> "Partido de Morón",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6574,
                    "name"=> "Partido de Navarro",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6581,
                    "name"=> "Partido de Necochea",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6588,
                    "name"=> "Partido de 9 de Julio",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6595,
                    "name"=> "Partido de Olavarría",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6602,
                    "name"=> "Partido de Patagones",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6609,
                    "name"=> "Partido de Pehuajó",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6616,
                    "name"=> "Partido de Pellegrini",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6623,
                    "name"=> "Partido de Pergamino",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6630,
                    "name"=> "Partido de Pila",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6638,
                    "name"=> "Partido de Pilar",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6644,
                    "name"=> "Partido de Pinamar",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6648,
                    "name"=> "Partido de Presidente Perón",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6651,
                    "name"=> "Partido de Puán",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6655,
                    "name"=> "Partido de Punta Indio",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6658,
                    "name"=> "Partido de Quilmes",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6665,
                    "name"=> "Partido de Ramallo",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6672,
                    "name"=> "Partido de Rauch",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6679,
                    "name"=> "Partido de Rivadavia",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6686,
                    "name"=> "Partido de Rojas",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6693,
                    "name"=> "Partido de Roque Pérez",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6700,
                    "name"=> "Partido de Saavedra",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6707,
                    "name"=> "Partido de Saladillo",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6714,
                    "name"=> "Partido de Salto",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6721,
                    "name"=> "Partido de Salliqueló",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6728,
                    "name"=> "Partido de San Andrés de Giles",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6735,
                    "name"=> "Partido de San Antonio de Areco",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6742,
                    "name"=> "Partido de San Cayetano",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6749,
                    "name"=> "Partido de San Fernando",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6756,
                    "name"=> "Partido de San Isidro",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6760,
                    "name"=> "Partido de San Miguel",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6763,
                    "name"=> "Partido de San Nicolás",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6770,
                    "name"=> "Partido de San Pedro",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6778,
                    "name"=> "Partido de San Vicente",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6784,
                    "name"=> "Partido de Suipacha",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6791,
                    "name"=> "Partido de Tandil",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6798,
                    "name"=> "Partido de Tapalqué",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6805,
                    "name"=> "Partido de Tigre",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6812,
                    "name"=> "Partido de Tordillo",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6819,
                    "name"=> "Partido de Tornquist",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6826,
                    "name"=> "Partido de Trenque Lauquen",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6833,
                    "name"=> "Partido de Tres Arroyos",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6840,
                    "name"=> "Partido de Tres de Febrero",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6847,
                    "name"=> "Partido de Tres Lomas",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6854,
                    "name"=> "Partido de 25 de Mayo",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6861,
                    "name"=> "Partido de Vicente López",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6868,
                    "name"=> "Partido de Villa Gesell",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6875,
                    "name"=> "Partido de Villarino",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 6882,
                    "name"=> "Partido de Zárate",
                    "estate_id"=> 6
                ],
                [
                    "id"=> 10007,
                    "name"=> "Departamento Ambato",
                    "estate_id"=> 10
                ],
                [
                    "id"=> 10014,
                    "name"=> "Departamento Ancasti",
                    "estate_id"=> 10
                ],
                [
                    "id"=> 10021,
                    "name"=> "Departamento Andalgalá",
                    "estate_id"=> 10
                ],
                [
                    "id"=> 10028,
                    "name"=> "Departamento Antofagasta de la Sierra",
                    "estate_id"=> 10
                ],
                [
                    "id"=> 10035,
                    "name"=> "Departamento Belén",
                    "estate_id"=> 10
                ],
                [
                    "id"=> 10042,
                    "name"=> "Departamento Capayán",
                    "estate_id"=> 10
                ],
                [
                    "id"=> 10049,
                    "name"=> "Departamento Capital",
                    "estate_id"=> 10
                ],
                [
                    "id"=> 10056,
                    "name"=> "Departamento El Alto",
                    "estate_id"=> 10
                ],
                [
                    "id"=> 10063,
                    "name"=> "Departamento Fray Mamerto Esquiú",
                    "estate_id"=> 10
                ],
                [
                    "id"=> 10070,
                    "name"=> "Departamento La Paz",
                    "estate_id"=> 10
                ],
                [
                    "id"=> 10077,
                    "name"=> "Departamento Paclín",
                    "estate_id"=> 10
                ],
                [
                    "id"=> 10084,
                    "name"=> "Departamento Pomán",
                    "estate_id"=> 10
                ],
                [
                    "id"=> 10091,
                    "name"=> "Departamento Santa María",
                    "estate_id"=> 10
                ],
                [
                    "id"=> 10098,
                    "name"=> "Departamento Santa Rosa",
                    "estate_id"=> 10
                ],
                [
                    "id"=> 10105,
                    "name"=> "Departamento Tinogasta",
                    "estate_id"=> 10
                ],
                [
                    "id"=> 10112,
                    "name"=> "Departamento Valle Viejo",
                    "estate_id"=> 10
                ],
                [
                    "id"=> 14007,
                    "name"=> "Departamento Calamuchita",
                    "estate_id"=> 14
                ],
                [
                    "id"=> 14014,
                    "name"=> "Departamento Capital",
                    "estate_id"=> 14
                ],
                [
                    "id"=> 14021,
                    "name"=> "Departamento Colón",
                    "estate_id"=> 14
                ],
                [
                    "id"=> 14028,
                    "name"=> "Departamento Cruz del Eje",
                    "estate_id"=> 14
                ],
                [
                    "id"=> 14035,
                    "name"=> "Departamento General Roca",
                    "estate_id"=> 14
                ],
                [
                    "id"=> 14042,
                    "name"=> "Departamento General San Martín",
                    "estate_id"=> 14
                ],
                [
                    "id"=> 14049,
                    "name"=> "Departamento Ischilín",
                    "estate_id"=> 14
                ],
                [
                    "id"=> 14056,
                    "name"=> "Departamento Juárez Celman",
                    "estate_id"=> 14
                ],
                [
                    "id"=> 14063,
                    "name"=> "Departamento Marcos Juárez",
                    "estate_id"=> 14
                ],
                [
                    "id"=> 14070,
                    "name"=> "Departamento Minas",
                    "estate_id"=> 14
                ],
                [
                    "id"=> 14077,
                    "name"=> "Departamento Pocho",
                    "estate_id"=> 14
                ],
                [
                    "id"=> 14084,
                    "name"=> "Departamento Presidente Roque Sáenz Peña",
                    "estate_id"=> 14
                ],
                [
                    "id"=> 14091,
                    "name"=> "Departamento Punilla",
                    "estate_id"=> 14
                ],
                [
                    "id"=> 14098,
                    "name"=> "Departamento Río Cuarto",
                    "estate_id"=> 14
                ],
                [
                    "id"=> 14105,
                    "name"=> "Departamento Río Primero",
                    "estate_id"=> 14
                ],
                [
                    "id"=> 14112,
                    "name"=> "Departamento Río Seco",
                    "estate_id"=> 14
                ],
                [
                    "id"=> 14119,
                    "name"=> "Departamento Río Segundo",
                    "estate_id"=> 14
                ],
                [
                    "id"=> 14126,
                    "name"=> "Departamento San Alberto",
                    "estate_id"=> 14
                ],
                [
                    "id"=> 14133,
                    "name"=> "Departamento San Javier",
                    "estate_id"=> 14
                ],
                [
                    "id"=> 14140,
                    "name"=> "Departamento San Justo",
                    "estate_id"=> 14
                ],
                [
                    "id"=> 14147,
                    "name"=> "Departamento Santa María",
                    "estate_id"=> 14
                ],
                [
                    "id"=> 14154,
                    "name"=> "Departamento Sobremonte",
                    "estate_id"=> 14
                ],
                [
                    "id"=> 14161,
                    "name"=> "Departamento Tercero Arriba",
                    "estate_id"=> 14
                ],
                [
                    "id"=> 14168,
                    "name"=> "Departamento Totoral",
                    "estate_id"=> 14
                ],
                [
                    "id"=> 14175,
                    "name"=> "Departamento Tulumba",
                    "estate_id"=> 14
                ],
                [
                    "id"=> 14182,
                    "name"=> "Departamento Unión",
                    "estate_id"=> 14
                ],
                [
                    "id"=> 18007,
                    "name"=> "Departamento Bella Vista",
                    "estate_id"=> 18
                ],
                [
                    "id"=> 18014,
                    "name"=> "Departamento Berón de Astrada",
                    "estate_id"=> 18
                ],
                [
                    "id"=> 18021,
                    "name"=> "Departamento Capital",
                    "estate_id"=> 18
                ],
                [
                    "id"=> 18028,
                    "name"=> "Departamento Concepción",
                    "estate_id"=> 18
                ],
                [
                    "id"=> 18035,
                    "name"=> "Departamento Curuzu Cuatia",
                    "estate_id"=> 18
                ],
                [
                    "id"=> 18042,
                    "name"=> "Departamento Empedrado",
                    "estate_id"=> 18
                ],
                [
                    "id"=> 18049,
                    "name"=> "Departamento Esquina",
                    "estate_id"=> 18
                ],
                [
                    "id"=> 18056,
                    "name"=> "Departamento General Alvear",
                    "estate_id"=> 18
                ],
                [
                    "id"=> 18063,
                    "name"=> "Departamento General Paz",
                    "estate_id"=> 18
                ],
                [
                    "id"=> 18070,
                    "name"=> "Departamento Goya",
                    "estate_id"=> 18
                ],
                [
                    "id"=> 18077,
                    "name"=> "Departamento Itatí",
                    "estate_id"=> 18
                ],
                [
                    "id"=> 18084,
                    "name"=> "Departamento Ituzaingó",
                    "estate_id"=> 18
                ],
                [
                    "id"=> 18091,
                    "name"=> "Departamento Lavalle",
                    "estate_id"=> 18
                ],
                [
                    "id"=> 18098,
                    "name"=> "Departamento Mburucuyá",
                    "estate_id"=> 18
                ],
                [
                    "id"=> 18105,
                    "name"=> "Departamento Mercedes",
                    "estate_id"=> 18
                ],
                [
                    "id"=> 18112,
                    "name"=> "Departamento Monte Caseros",
                    "estate_id"=> 18
                ],
                [
                    "id"=> 18119,
                    "name"=> "Departamento Paso de los Libres",
                    "estate_id"=> 18
                ],
                [
                    "id"=> 18126,
                    "name"=> "Departamento Saladas",
                    "estate_id"=> 18
                ],
                [
                    "id"=> 18133,
                    "name"=> "Departamento San Cosme",
                    "estate_id"=> 18
                ],
                [
                    "id"=> 18140,
                    "name"=> "Departamento San Luis del Palmar",
                    "estate_id"=> 18
                ],
                [
                    "id"=> 18147,
                    "name"=> "Departamento San Martín",
                    "estate_id"=> 18
                ],
                [
                    "id"=> 18154,
                    "name"=> "Departamento San Miguel",
                    "estate_id"=> 18
                ],
                [
                    "id"=> 18161,
                    "name"=> "Departamento San Roque",
                    "estate_id"=> 18
                ],
                [
                    "id"=> 18168,
                    "name"=> "Departamento Santo Tomé",
                    "estate_id"=> 18
                ],
                [
                    "id"=> 18175,
                    "name"=> "Departamento Sauce",
                    "estate_id"=> 18
                ],
                [
                    "id"=> 22007,
                    "name"=> "Departamento Almirante Brown",
                    "estate_id"=> 22
                ],
                [
                    "id"=> 22014,
                    "name"=> "Departamento Bermejo",
                    "estate_id"=> 22
                ],
                [
                    "id"=> 22021,
                    "name"=> "Departamento Comandante Fernández",
                    "estate_id"=> 22
                ],
                [
                    "id"=> 22028,
                    "name"=> "Departamento Chacabuco",
                    "estate_id"=> 22
                ],
                [
                    "id"=> 22036,
                    "name"=> "Departamento 12 de Octubre",
                    "estate_id"=> 22
                ],
                [
                    "id"=> 22039,
                    "name"=> "Departamento 2 de Abril",
                    "estate_id"=> 22
                ],
                [
                    "id"=> 22043,
                    "name"=> "Departamento Fray Justo Santa María de Oro",
                    "estate_id"=> 22
                ],
                [
                    "id"=> 22049,
                    "name"=> "Departamento General Belgrano",
                    "estate_id"=> 22
                ],
                [
                    "id"=> 22056,
                    "name"=> "Departamento General Donovan",
                    "estate_id"=> 22
                ],
                [
                    "id"=> 22063,
                    "name"=> "Departamento General Güemes",
                    "estate_id"=> 22
                ],
                [
                    "id"=> 22070,
                    "name"=> "Departamento Independencia",
                    "estate_id"=> 22
                ],
                [
                    "id"=> 22077,
                    "name"=> "Departamento Libertad",
                    "estate_id"=> 22
                ],
                [
                    "id"=> 22084,
                    "name"=> "Departamento Libertador General San Martín",
                    "estate_id"=> 22
                ],
                [
                    "id"=> 22091,
                    "name"=> "Departamento Maipú",
                    "estate_id"=> 22
                ],
                [
                    "id"=> 22098,
                    "name"=> "Departamento Mayor Luis J. Fontana",
                    "estate_id"=> 22
                ],
                [
                    "id"=> 22105,
                    "name"=> "Departamento 9 de Julio",
                    "estate_id"=> 22
                ],
                [
                    "id"=> 22112,
                    "name"=> "Departamento O'Higgins",
                    "estate_id"=> 22
                ],
                [
                    "id"=> 22119,
                    "name"=> "Departamento Presidencia de la Plaza",
                    "estate_id"=> 22
                ],
                [
                    "id"=> 22126,
                    "name"=> "Departamento 1° de Mayo",
                    "estate_id"=> 22
                ],
                [
                    "id"=> 22133,
                    "name"=> "Departamento Quitilipi",
                    "estate_id"=> 22
                ],
                [
                    "id"=> 22140,
                    "name"=> "Departamento San Fernando",
                    "estate_id"=> 22
                ],
                [
                    "id"=> 22147,
                    "name"=> "Departamento San Lorenzo",
                    "estate_id"=> 22
                ],
                [
                    "id"=> 22154,
                    "name"=> "Departamento Sargento Cabral",
                    "estate_id"=> 22
                ],
                [
                    "id"=> 22161,
                    "name"=> "Departamento Tapenagá",
                    "estate_id"=> 22
                ],
                [
                    "id"=> 22168,
                    "name"=> "Departamento 25 de Mayo",
                    "estate_id"=> 22
                ],
                [
                    "id"=> 26007,
                    "name"=> "Departamento Biedma",
                    "estate_id"=> 26
                ],
                [
                    "id"=> 26014,
                    "name"=> "Departamento Cushamen",
                    "estate_id"=> 26
                ],
                [
                    "id"=> 26021,
                    "name"=> "Departamento Escalante",
                    "estate_id"=> 26
                ],
                [
                    "id"=> 26028,
                    "name"=> "Departamento Florentino Ameghino",
                    "estate_id"=> 26
                ],
                [
                    "id"=> 26035,
                    "name"=> "Departamento Futaleufú",
                    "estate_id"=> 26
                ],
                [
                    "id"=> 26042,
                    "name"=> "Departamento Gaiman",
                    "estate_id"=> 26
                ],
                [
                    "id"=> 26049,
                    "name"=> "Departamento Gastre",
                    "estate_id"=> 26
                ],
                [
                    "id"=> 26056,
                    "name"=> "Departamento Languiñeo",
                    "estate_id"=> 26
                ],
                [
                    "id"=> 26063,
                    "name"=> "Departamento Mártires",
                    "estate_id"=> 26
                ],
                [
                    "id"=> 26070,
                    "name"=> "Departamento Paso de Indios",
                    "estate_id"=> 26
                ],
                [
                    "id"=> 26077,
                    "name"=> "Departamento Rawson",
                    "estate_id"=> 26
                ],
                [
                    "id"=> 26084,
                    "name"=> "Departamento Río Senguer",
                    "estate_id"=> 26
                ],
                [
                    "id"=> 26091,
                    "name"=> "Departamento Sarmiento",
                    "estate_id"=> 26
                ],
                [
                    "id"=> 26098,
                    "name"=> "Departamento Tehuelches",
                    "estate_id"=> 26
                ],
                [
                    "id"=> 26105,
                    "name"=> "Departamento Telsen",
                    "estate_id"=> 26
                ],
                [
                    "id"=> 30008,
                    "name"=> "Departamento Colón",
                    "estate_id"=> 30
                ],
                [
                    "id"=> 30015,
                    "name"=> "Departamento Concordia",
                    "estate_id"=> 30
                ],
                [
                    "id"=> 30021,
                    "name"=> "Departamento Diamante",
                    "estate_id"=> 30
                ],
                [
                    "id"=> 30028,
                    "name"=> "Departamento Federación",
                    "estate_id"=> 30
                ],
                [
                    "id"=> 30035,
                    "name"=> "Departamento Federal",
                    "estate_id"=> 30
                ],
                [
                    "id"=> 30042,
                    "name"=> "Departamento Feliciano",
                    "estate_id"=> 30
                ],
                [
                    "id"=> 30049,
                    "name"=> "Departamento Gualeguay",
                    "estate_id"=> 30
                ],
                [
                    "id"=> 30056,
                    "name"=> "Departamento Gualeguaychú",
                    "estate_id"=> 30
                ],
                [
                    "id"=> 30063,
                    "name"=> "Departamento Islas del Ibicuy",
                    "estate_id"=> 30
                ],
                [
                    "id"=> 30070,
                    "name"=> "Departamento La Paz",
                    "estate_id"=> 30
                ],
                [
                    "id"=> 30077,
                    "name"=> "Departamento Nogoyá",
                    "estate_id"=> 30
                ],
                [
                    "id"=> 30084,
                    "name"=> "Departamento Paraná",
                    "estate_id"=> 30
                ],
                [
                    "id"=> 30088,
                    "name"=> "Departamento San Salvador",
                    "estate_id"=> 30
                ],
                [
                    "id"=> 30091,
                    "name"=> "Departamento Tala",
                    "estate_id"=> 30
                ],
                [
                    "id"=> 30098,
                    "name"=> "Departamento Uruguay",
                    "estate_id"=> 30
                ],
                [
                    "id"=> 30105,
                    "name"=> "Departamento Victoria",
                    "estate_id"=> 30
                ],
                [
                    "id"=> 30113,
                    "name"=> "Departamento Villaguay",
                    "estate_id"=> 30
                ],
                [
                    "id"=> 34007,
                    "name"=> "Departamento Bermejo",
                    "estate_id"=> 34
                ],
                [
                    "id"=> 34014,
                    "name"=> "Departamento Formosa",
                    "estate_id"=> 34
                ],
                [
                    "id"=> 34021,
                    "name"=> "Departamento Laishí",
                    "estate_id"=> 34
                ],
                [
                    "id"=> 34028,
                    "name"=> "Departamento Matacos",
                    "estate_id"=> 34
                ],
                [
                    "id"=> 34035,
                    "name"=> "Departamento Patiño",
                    "estate_id"=> 34
                ],
                [
                    "id"=> 34042,
                    "name"=> "Departamento Pilagás",
                    "estate_id"=> 34
                ],
                [
                    "id"=> 34049,
                    "name"=> "Departamento Pilcomayo",
                    "estate_id"=> 34
                ],
                [
                    "id"=> 34056,
                    "name"=> "Departamento Pirané",
                    "estate_id"=> 34
                ],
                [
                    "id"=> 34063,
                    "name"=> "Departamento Ramón Lista",
                    "estate_id"=> 34
                ],
                [
                    "id"=> 38007,
                    "name"=> "Departamento Cochinoca",
                    "estate_id"=> 38
                ],
                [
                    "id"=> 38014,
                    "name"=> "Departamento El Carmen",
                    "estate_id"=> 38
                ],
                [
                    "id"=> 38021,
                    "name"=> "Departamento Dr. Manuel Belgrano",
                    "estate_id"=> 38
                ],
                [
                    "id"=> 38028,
                    "name"=> "Departamento Humahuaca",
                    "estate_id"=> 38
                ],
                [
                    "id"=> 38035,
                    "name"=> "Departamento Ledesma",
                    "estate_id"=> 38
                ],
                [
                    "id"=> 38042,
                    "name"=> "Departamento Palpalá",
                    "estate_id"=> 38
                ],
                [
                    "id"=> 38049,
                    "name"=> "Departamento Rinconada",
                    "estate_id"=> 38
                ],
                [
                    "id"=> 38056,
                    "name"=> "Departamento San Antonio",
                    "estate_id"=> 38
                ],
                [
                    "id"=> 38063,
                    "name"=> "Departamento San Pedro",
                    "estate_id"=> 38
                ],
                [
                    "id"=> 38070,
                    "name"=> "Departamento Santa Bárbara",
                    "estate_id"=> 38
                ],
                [
                    "id"=> 38077,
                    "name"=> "Departamento Santa Catalina",
                    "estate_id"=> 38
                ],
                [
                    "id"=> 38084,
                    "name"=> "Departamento Susques",
                    "estate_id"=> 38
                ],
                [
                    "id"=> 38094,
                    "name"=> "Departamento Tilcara",
                    "estate_id"=> 38
                ],
                [
                    "id"=> 38098,
                    "name"=> "Departamento Tumbaya",
                    "estate_id"=> 38
                ],
                [
                    "id"=> 38105,
                    "name"=> "Departamento Valle Grande",
                    "estate_id"=> 38
                ],
                [
                    "id"=> 38112,
                    "name"=> "Departamento Yaví",
                    "estate_id"=> 38
                ],
                [
                    "id"=> 42007,
                    "name"=> "Departamento Atreucó",
                    "estate_id"=> 42
                ],
                [
                    "id"=> 42014,
                    "name"=> "Departamento Caleu Caleu",
                    "estate_id"=> 42
                ],
                [
                    "id"=> 42021,
                    "name"=> "Departamento Capital",
                    "estate_id"=> 42
                ],
                [
                    "id"=> 42028,
                    "name"=> "Departamento Catriló",
                    "estate_id"=> 42
                ],
                [
                    "id"=> 42035,
                    "name"=> "Departamento Conhelo",
                    "estate_id"=> 42
                ],
                [
                    "id"=> 42042,
                    "name"=> "Departamento Curacó",
                    "estate_id"=> 42
                ],
                [
                    "id"=> 42049,
                    "name"=> "Departamento Chalileo",
                    "estate_id"=> 42
                ],
                [
                    "id"=> 42056,
                    "name"=> "Departamento Chapaleufú",
                    "estate_id"=> 42
                ],
                [
                    "id"=> 42063,
                    "name"=> "Departamento Chical Co",
                    "estate_id"=> 42
                ],
                [
                    "id"=> 42070,
                    "name"=> "Departamento Guatraché",
                    "estate_id"=> 42
                ],
                [
                    "id"=> 42077,
                    "name"=> "Departamento Hucal",
                    "estate_id"=> 42
                ],
                [
                    "id"=> 42084,
                    "name"=> "Departamento Lihuel Calel",
                    "estate_id"=> 42
                ],
                [
                    "id"=> 42091,
                    "name"=> "Departamento Limay Mahuida",
                    "estate_id"=> 42
                ],
                [
                    "id"=> 42098,
                    "name"=> "Departamento Loventué",
                    "estate_id"=> 42
                ],
                [
                    "id"=> 42105,
                    "name"=> "Departamento Maracó",
                    "estate_id"=> 42
                ],
                [
                    "id"=> 42112,
                    "name"=> "Departamento Puelén",
                    "estate_id"=> 42
                ],
                [
                    "id"=> 42119,
                    "name"=> "Departamento Quemú Quemú",
                    "estate_id"=> 42
                ],
                [
                    "id"=> 42126,
                    "name"=> "Departamento Rancul",
                    "estate_id"=> 42
                ],
                [
                    "id"=> 42133,
                    "name"=> "Departamento Realicó",
                    "estate_id"=> 42
                ],
                [
                    "id"=> 42140,
                    "name"=> "Departamento Toay",
                    "estate_id"=> 42
                ],
                [
                    "id"=> 42147,
                    "name"=> "Departamento Trenel",
                    "estate_id"=> 42
                ],
                [
                    "id"=> 42154,
                    "name"=> "Departamento Utracán",
                    "estate_id"=> 42
                ],
                [
                    "id"=> 46007,
                    "name"=> "Departamento Arauco",
                    "estate_id"=> 46
                ],
                [
                    "id"=> 46014,
                    "name"=> "Departamento Capital",
                    "estate_id"=> 46
                ],
                [
                    "id"=> 46021,
                    "name"=> "Departamento Castro Barros",
                    "estate_id"=> 46
                ],
                [
                    "id"=> 46028,
                    "name"=> "Departamento Coronel Felipe Varela",
                    "estate_id"=> 46
                ],
                [
                    "id"=> 46035,
                    "name"=> "Departamento Chamical",
                    "estate_id"=> 46
                ],
                [
                    "id"=> 46042,
                    "name"=> "Departamento Chilecito",
                    "estate_id"=> 46
                ],
                [
                    "id"=> 46049,
                    "name"=> "Departamento Famatina",
                    "estate_id"=> 46
                ],
                [
                    "id"=> 46056,
                    "name"=> "Departamento General Ángel V. Peñaloza",
                    "estate_id"=> 46
                ],
                [
                    "id"=> 46063,
                    "name"=> "Departamento General Belgrano",
                    "estate_id"=> 46
                ],
                [
                    "id"=> 46070,
                    "name"=> "Departamento General Juan F. Quiroga",
                    "estate_id"=> 46
                ],
                [
                    "id"=> 46077,
                    "name"=> "Departamento General Lamadrid",
                    "estate_id"=> 46
                ],
                [
                    "id"=> 46084,
                    "name"=> "Departamento General Ocampo",
                    "estate_id"=> 46
                ],
                [
                    "id"=> 46091,
                    "name"=> "Departamento General San Martín",
                    "estate_id"=> 46
                ],
                [
                    "id"=> 46098,
                    "name"=> "Departamento Vinchina",
                    "estate_id"=> 46
                ],
                [
                    "id"=> 46105,
                    "name"=> "Departamento Independencia",
                    "estate_id"=> 46
                ],
                [
                    "id"=> 46112,
                    "name"=> "Departamento Rosario Vera Peñaloza",
                    "estate_id"=> 46
                ],
                [
                    "id"=> 46119,
                    "name"=> "Departamento San Blas de Los Sauces",
                    "estate_id"=> 46
                ],
                [
                    "id"=> 46126,
                    "name"=> "Departamento Sanagasta",
                    "estate_id"=> 46
                ],
                [
                    "id"=> 50007,
                    "name"=> "Departamento Capital",
                    "estate_id"=> 50
                ],
                [
                    "id"=> 50014,
                    "name"=> "Departamento General Alvear",
                    "estate_id"=> 50
                ],
                [
                    "id"=> 50021,
                    "name"=> "Departamento Godoy Cruz",
                    "estate_id"=> 50
                ],
                [
                    "id"=> 50028,
                    "name"=> "Departamento Guaymallén",
                    "estate_id"=> 50
                ],
                [
                    "id"=> 50035,
                    "name"=> "Departamento Junín",
                    "estate_id"=> 50
                ],
                [
                    "id"=> 50042,
                    "name"=> "Departamento La Paz",
                    "estate_id"=> 50
                ],
                [
                    "id"=> 50049,
                    "name"=> "Departamento Las Heras",
                    "estate_id"=> 50
                ],
                [
                    "id"=> 50056,
                    "name"=> "Departamento Lavalle",
                    "estate_id"=> 50
                ],
                [
                    "id"=> 50063,
                    "name"=> "Departamento Luján de Cuyo",
                    "estate_id"=> 50
                ],
                [
                    "id"=> 50070,
                    "name"=> "Departamento Maipú",
                    "estate_id"=> 50
                ],
                [
                    "id"=> 50077,
                    "name"=> "Departamento Malargüe",
                    "estate_id"=> 50
                ],
                [
                    "id"=> 50084,
                    "name"=> "Departamento Rivadavia",
                    "estate_id"=> 50
                ],
                [
                    "id"=> 50091,
                    "name"=> "Departamento San Carlos",
                    "estate_id"=> 50
                ],
                [
                    "id"=> 50098,
                    "name"=> "Departamento San Martín",
                    "estate_id"=> 50
                ],
                [
                    "id"=> 50105,
                    "name"=> "Departamento San Rafael",
                    "estate_id"=> 50
                ],
                [
                    "id"=> 50112,
                    "name"=> "Departamento Santa Rosa",
                    "estate_id"=> 50
                ],
                [
                    "id"=> 50119,
                    "name"=> "Departamento Tunuyán",
                    "estate_id"=> 50
                ],
                [
                    "id"=> 50126,
                    "name"=> "Departamento Tupungato",
                    "estate_id"=> 50
                ],
                [
                    "id"=> 54007,
                    "name"=> "Departamento Apóstoles",
                    "estate_id"=> 54
                ],
                [
                    "id"=> 54014,
                    "name"=> "Departamento Cainguás",
                    "estate_id"=> 54
                ],
                [
                    "id"=> 54021,
                    "name"=> "Departamento Candelaria",
                    "estate_id"=> 54
                ],
                [
                    "id"=> 54028,
                    "name"=> "Departamento Capital",
                    "estate_id"=> 54
                ],
                [
                    "id"=> 54035,
                    "name"=> "Departamento Concepción",
                    "estate_id"=> 54
                ],
                [
                    "id"=> 54042,
                    "name"=> "Departamento Eldorado",
                    "estate_id"=> 54
                ],
                [
                    "id"=> 54049,
                    "name"=> "Departamento General Manuel Belgrano",
                    "estate_id"=> 54
                ],
                [
                    "id"=> 54056,
                    "name"=> "Departamento Guaraní",
                    "estate_id"=> 54
                ],
                [
                    "id"=> 54063,
                    "name"=> "Departamento Iguazú",
                    "estate_id"=> 54
                ],
                [
                    "id"=> 54070,
                    "name"=> "Departamento Leandro N. Alem",
                    "estate_id"=> 54
                ],
                [
                    "id"=> 54077,
                    "name"=> "Departamento Libertador General San Martín",
                    "estate_id"=> 54
                ],
                [
                    "id"=> 54084,
                    "name"=> "Departamento Montecarlo",
                    "estate_id"=> 54
                ],
                [
                    "id"=> 54091,
                    "name"=> "Departamento Oberá",
                    "estate_id"=> 54
                ],
                [
                    "id"=> 54098,
                    "name"=> "Departamento San Ignacio",
                    "estate_id"=> 54
                ],
                [
                    "id"=> 54105,
                    "name"=> "Departamento San Javier",
                    "estate_id"=> 54
                ],
                [
                    "id"=> 54112,
                    "name"=> "Departamento San Pedro",
                    "estate_id"=> 54
                ],
                [
                    "id"=> 54119,
                    "name"=> "Departamento 25de Mayo",
                    "estate_id"=> 54
                ],
                [
                    "id"=> 58007,
                    "name"=> "Departamento Aluminé",
                    "estate_id"=> 58
                ],
                [
                    "id"=> 58014,
                    "name"=> "Departamento Añelo",
                    "estate_id"=> 58
                ],
                [
                    "id"=> 58021,
                    "name"=> "Departamento Catán Lil",
                    "estate_id"=> 58
                ],
                [
                    "id"=> 58028,
                    "name"=> "Departamento Collón Curá",
                    "estate_id"=> 58
                ],
                [
                    "id"=> 58035,
                    "name"=> "Departamento Confluencia",
                    "estate_id"=> 58
                ],
                [
                    "id"=> 58042,
                    "name"=> "Departamento Chos Malal",
                    "estate_id"=> 58
                ],
                [
                    "id"=> 58049,
                    "name"=> "Departamento Huiliches",
                    "estate_id"=> 58
                ],
                [
                    "id"=> 58056,
                    "name"=> "Departamento Lácar",
                    "estate_id"=> 58
                ],
                [
                    "id"=> 58063,
                    "name"=> "Departamento Loncopué",
                    "estate_id"=> 58
                ],
                [
                    "id"=> 58070,
                    "name"=> "Departamento Los Lagos",
                    "estate_id"=> 58
                ],
                [
                    "id"=> 58077,
                    "name"=> "Departamento Minas",
                    "estate_id"=> 58
                ],
                [
                    "id"=> 58084,
                    "name"=> "Departamento Ñorquín",
                    "estate_id"=> 58
                ],
                [
                    "id"=> 58091,
                    "name"=> "Departamento Pehuenches",
                    "estate_id"=> 58
                ],
                [
                    "id"=> 58098,
                    "name"=> "Departamento Picún Leufú",
                    "estate_id"=> 58
                ],
                [
                    "id"=> 58105,
                    "name"=> "Departamento Picunches",
                    "estate_id"=> 58
                ],
                [
                    "id"=> 58112,
                    "name"=> "Departamento Zapala",
                    "estate_id"=> 58
                ],
                [
                    "id"=> 62007,
                    "name"=> "Departamento Adolfo Alsina",
                    "estate_id"=> 62
                ],
                [
                    "id"=> 62014,
                    "name"=> "Departamento Avellaneda",
                    "estate_id"=> 62
                ],
                [
                    "id"=> 62021,
                    "name"=> "Departamento Bariloche",
                    "estate_id"=> 62
                ],
                [
                    "id"=> 62028,
                    "name"=> "Departamento Conesa",
                    "estate_id"=> 62
                ],
                [
                    "id"=> 62035,
                    "name"=> "Departamento El Cuy",
                    "estate_id"=> 62
                ],
                [
                    "id"=> 62042,
                    "name"=> "Departamento General Roca",
                    "estate_id"=> 62
                ],
                [
                    "id"=> 62049,
                    "name"=> "Departamento 9 de julio",
                    "estate_id"=> 62
                ],
                [
                    "id"=> 62056,
                    "name"=> "Departamento Ñorquinco",
                    "estate_id"=> 62
                ],
                [
                    "id"=> 62063,
                    "name"=> "Departamento Pichi Mahuida",
                    "estate_id"=> 62
                ],
                [
                    "id"=> 62070,
                    "name"=> "Departamento Pilcaniyeu",
                    "estate_id"=> 62
                ],
                [
                    "id"=> 62077,
                    "name"=> "Departamento San Antonio",
                    "estate_id"=> 62
                ],
                [
                    "id"=> 62084,
                    "name"=> "Departamento Valcheta",
                    "estate_id"=> 62
                ],
                [
                    "id"=> 62091,
                    "name"=> "Departamento 25 de Mayo",
                    "estate_id"=> 62
                ],
                [
                    "id"=> 66007,
                    "name"=> "Departamento Anta",
                    "estate_id"=> 66
                ],
                [
                    "id"=> 66014,
                    "name"=> "Departamento Cachi",
                    "estate_id"=> 66
                ],
                [
                    "id"=> 66021,
                    "name"=> "Departamento Cafayate",
                    "estate_id"=> 66
                ],
                [
                    "id"=> 66028,
                    "name"=> "Departamento Capital",
                    "estate_id"=> 66
                ],
                [
                    "id"=> 66035,
                    "name"=> "Departamento Cerrillos",
                    "estate_id"=> 66
                ],
                [
                    "id"=> 66042,
                    "name"=> "Departamento Chicoana",
                    "estate_id"=> 66
                ],
                [
                    "id"=> 66049,
                    "name"=> "Departamento General Güemes",
                    "estate_id"=> 66
                ],
                [
                    "id"=> 66056,
                    "name"=> "Departamento General José de San Martín",
                    "estate_id"=> 66
                ],
                [
                    "id"=> 66063,
                    "name"=> "Departamento Guachipas",
                    "estate_id"=> 66
                ],
                [
                    "id"=> 66070,
                    "name"=> "Departamento Iruya",
                    "estate_id"=> 66
                ],
                [
                    "id"=> 66077,
                    "name"=> "Departamento La Caldera",
                    "estate_id"=> 66
                ],
                [
                    "id"=> 66084,
                    "name"=> "Departamento La Candelaria",
                    "estate_id"=> 66
                ],
                [
                    "id"=> 66091,
                    "name"=> "Departamento La Poma",
                    "estate_id"=> 66
                ],
                [
                    "id"=> 66098,
                    "name"=> "Departamento La Viña",
                    "estate_id"=> 66
                ],
                [
                    "id"=> 66105,
                    "name"=> "Departamento Los Andes",
                    "estate_id"=> 66
                ],
                [
                    "id"=> 66112,
                    "name"=> "Departamento Metán",
                    "estate_id"=> 66
                ],
                [
                    "id"=> 66119,
                    "name"=> "Departamento Molinos",
                    "estate_id"=> 66
                ],
                [
                    "id"=> 66126,
                    "name"=> "Departamento Orán",
                    "estate_id"=> 66
                ],
                [
                    "id"=> 66133,
                    "name"=> "Departamento Rivadavia",
                    "estate_id"=> 66
                ],
                [
                    "id"=> 66140,
                    "name"=> "Departamento Rosario de la Frontera",
                    "estate_id"=> 66
                ],
                [
                    "id"=> 66147,
                    "name"=> "Departamento Rosario de Lerma",
                    "estate_id"=> 66
                ],
                [
                    "id"=> 66154,
                    "name"=> "Departamento San Carlos",
                    "estate_id"=> 66
                ],
                [
                    "id"=> 66161,
                    "name"=> "Departamento Santa Victoria",
                    "estate_id"=> 66
                ],
                [
                    "id"=> 70007,
                    "name"=> "Departamento Albardón",
                    "estate_id"=> 70
                ],
                [
                    "id"=> 70014,
                    "name"=> "Departamento Angaco",
                    "estate_id"=> 70
                ],
                [
                    "id"=> 70021,
                    "name"=> "Departamento Calingasta",
                    "estate_id"=> 70
                ],
                [
                    "id"=> 70028,
                    "name"=> "Departamento Capital",
                    "estate_id"=> 70
                ],
                [
                    "id"=> 70035,
                    "name"=> "Departamento Caucete",
                    "estate_id"=> 70
                ],
                [
                    "id"=> 70042,
                    "name"=> "Departamento Chimbas",
                    "estate_id"=> 70
                ],
                [
                    "id"=> 70049,
                    "name"=> "Departamento Iglesia",
                    "estate_id"=> 70
                ],
                [
                    "id"=> 70056,
                    "name"=> "Departamento Jáchal",
                    "estate_id"=> 70
                ],
                [
                    "id"=> 70063,
                    "name"=> "Departamento 9 de Julio",
                    "estate_id"=> 70
                ],
                [
                    "id"=> 70070,
                    "name"=> "Departamento Pocito",
                    "estate_id"=> 70
                ],
                [
                    "id"=> 70077,
                    "name"=> "Departamento Rawson",
                    "estate_id"=> 70
                ],
                [
                    "id"=> 70084,
                    "name"=> "Departamento Rivadavia",
                    "estate_id"=> 70
                ],
                [
                    "id"=> 70091,
                    "name"=> "Departamento San Martín",
                    "estate_id"=> 70
                ],
                [
                    "id"=> 70098,
                    "name"=> "Departamento Santa Lucía",
                    "estate_id"=> 70
                ],
                [
                    "id"=> 70105,
                    "name"=> "Departamento Sarmiento",
                    "estate_id"=> 70
                ],
                [
                    "id"=> 70112,
                    "name"=> "Departamento Ullum",
                    "estate_id"=> 70
                ],
                [
                    "id"=> 70119,
                    "name"=> "Departamento Valle Fértil",
                    "estate_id"=> 70
                ],
                [
                    "id"=> 70126,
                    "name"=> "Departamento 25 de Mayo",
                    "estate_id"=> 70
                ],
                [
                    "id"=> 70133,
                    "name"=> "Departamento Zonda",
                    "estate_id"=> 70
                ],
                [
                    "id"=> 74007,
                    "name"=> "Departamento Ayacucho",
                    "estate_id"=> 74
                ],
                [
                    "id"=> 74014,
                    "name"=> "Departamento Belgrano",
                    "estate_id"=> 74
                ],
                [
                    "id"=> 74021,
                    "name"=> "Departamento Coronel Pringles",
                    "estate_id"=> 74
                ],
                [
                    "id"=> 74028,
                    "name"=> "Departamento Chacabuco",
                    "estate_id"=> 74
                ],
                [
                    "id"=> 74035,
                    "name"=> "Departamento General Pedernera",
                    "estate_id"=> 74
                ],
                [
                    "id"=> 74042,
                    "name"=> "Departamento Gobernador Dupuy",
                    "estate_id"=> 74
                ],
                [
                    "id"=> 74049,
                    "name"=> "Departamento Junín",
                    "estate_id"=> 74
                ],
                [
                    "id"=> 74056,
                    "name"=> "Departamento Juan Martín de Pueyrredón",
                    "estate_id"=> 74
                ],
                [
                    "id"=> 74063,
                    "name"=> "Departamento Libertador General San Martín",
                    "estate_id"=> 74
                ],
                [
                    "id"=> 78007,
                    "name"=> "Departamento Corpen Aike",
                    "estate_id"=> 78
                ],
                [
                    "id"=> 78014,
                    "name"=> "Departamento Deseado",
                    "estate_id"=> 78
                ],
                [
                    "id"=> 78021,
                    "name"=> "Departamento Güer Aike",
                    "estate_id"=> 78
                ],
                [
                    "id"=> 78028,
                    "name"=> "Departamento Lago Argentino",
                    "estate_id"=> 78
                ],
                [
                    "id"=> 78035,
                    "name"=> "Departamento Lago Buenos Aires",
                    "estate_id"=> 78
                ],
                [
                    "id"=> 78042,
                    "name"=> "Departamento Magallanes",
                    "estate_id"=> 78
                ],
                [
                    "id"=> 78049,
                    "name"=> "Departamento Río Chico",
                    "estate_id"=> 78
                ],
                [
                    "id"=> 82007,
                    "name"=> "Departamento Belgrano",
                    "estate_id"=> 82
                ],
                [
                    "id"=> 82014,
                    "name"=> "Departamento Caseros",
                    "estate_id"=> 82
                ],
                [
                    "id"=> 82021,
                    "name"=> "Departamento Castellanos",
                    "estate_id"=> 82
                ],
                [
                    "id"=> 82028,
                    "name"=> "Departamento Villa Constitución",
                    "estate_id"=> 82
                ],
                [
                    "id"=> 82035,
                    "name"=> "Departamento Garay",
                    "estate_id"=> 82
                ],
                [
                    "id"=> 82042,
                    "name"=> "Departamento General López",
                    "estate_id"=> 82
                ],
                [
                    "id"=> 82049,
                    "name"=> "Departamento General Obligado",
                    "estate_id"=> 82
                ],
                [
                    "id"=> 82056,
                    "name"=> "Departamento Iriondo",
                    "estate_id"=> 82
                ],
                [
                    "id"=> 82063,
                    "name"=> "Departamento La Capital",
                    "estate_id"=> 82
                ],
                [
                    "id"=> 82070,
                    "name"=> "Departamento Las Colonias",
                    "estate_id"=> 82
                ],
                [
                    "id"=> 82077,
                    "name"=> "Departamento 9 de Julio",
                    "estate_id"=> 82
                ],
                [
                    "id"=> 82084,
                    "name"=> "Departamento Rosario",
                    "estate_id"=> 82
                ],
                [
                    "id"=> 82091,
                    "name"=> "Departamento San Cristóbal",
                    "estate_id"=> 82
                ],
                [
                    "id"=> 82098,
                    "name"=> "Departamento San Javier",
                    "estate_id"=> 82
                ],
                [
                    "id"=> 82105,
                    "name"=> "Departamento San Jerónimo",
                    "estate_id"=> 82
                ],
                [
                    "id"=> 82112,
                    "name"=> "Departamento San Justo",
                    "estate_id"=> 82
                ],
                [
                    "id"=> 82119,
                    "name"=> "Departamento San Lorenzo",
                    "estate_id"=> 82
                ],
                [
                    "id"=> 82126,
                    "name"=> "Departamento San Martín",
                    "estate_id"=> 82
                ],
                [
                    "id"=> 82133,
                    "name"=> "Departamento Vera",
                    "estate_id"=> 82
                ],
                [
                    "id"=> 86007,
                    "name"=> "Departamento Aguirre",
                    "estate_id"=> 86
                ],
                [
                    "id"=> 86014,
                    "name"=> "Departamento Alberdi",
                    "estate_id"=> 86
                ],
                [
                    "id"=> 86021,
                    "name"=> "Departamento Atamisqui",
                    "estate_id"=> 86
                ],
                [
                    "id"=> 86028,
                    "name"=> "Departamento Avellaneda",
                    "estate_id"=> 86
                ],
                [
                    "id"=> 86035,
                    "name"=> "Departamento Banda",
                    "estate_id"=> 86
                ],
                [
                    "id"=> 86042,
                    "name"=> "Departamento Belgrano",
                    "estate_id"=> 86
                ],
                [
                    "id"=> 86049,
                    "name"=> "Departamento Capital",
                    "estate_id"=> 86
                ],
                [
                    "id"=> 86056,
                    "name"=> "Departamento Copo",
                    "estate_id"=> 86
                ],
                [
                    "id"=> 86063,
                    "name"=> "Departamento Choya",
                    "estate_id"=> 86
                ],
                [
                    "id"=> 86070,
                    "name"=> "Departamento Figueroa",
                    "estate_id"=> 86
                ],
                [
                    "id"=> 86077,
                    "name"=> "Departamento General Taboada",
                    "estate_id"=> 86
                ],
                [
                    "id"=> 86084,
                    "name"=> "Departamento Guasayán",
                    "estate_id"=> 86
                ],
                [
                    "id"=> 86091,
                    "name"=> "Departamento Jiménez",
                    "estate_id"=> 86
                ],
                [
                    "id"=> 86098,
                    "name"=> "Departamento Juan F. Ibarra",
                    "estate_id"=> 86
                ],
                [
                    "id"=> 86105,
                    "name"=> "Departamento Loreto",
                    "estate_id"=> 86
                ],
                [
                    "id"=> 86112,
                    "name"=> "Departamento Mitre",
                    "estate_id"=> 86
                ],
                [
                    "id"=> 86119,
                    "name"=> "Departamento Moreno",
                    "estate_id"=> 86
                ],
                [
                    "id"=> 86126,
                    "name"=> "Departamento Ojo de Agua",
                    "estate_id"=> 86
                ],
                [
                    "id"=> 86133,
                    "name"=> "Departamento Pellegrini",
                    "estate_id"=> 86
                ],
                [
                    "id"=> 86140,
                    "name"=> "Departamento Quebrachos",
                    "estate_id"=> 86
                ],
                [
                    "id"=> 86147,
                    "name"=> "Departamento Río Hondo",
                    "estate_id"=> 86
                ],
                [
                    "id"=> 86154,
                    "name"=> "Departamento Rivadavia",
                    "estate_id"=> 86
                ],
                [
                    "id"=> 86161,
                    "name"=> "Departamento Robles",
                    "estate_id"=> 86
                ],
                [
                    "id"=> 86168,
                    "name"=> "Departamento Salavina",
                    "estate_id"=> 86
                ],
                [
                    "id"=> 86175,
                    "name"=> "Departamento San Martín",
                    "estate_id"=> 86
                ],
                [
                    "id"=> 86182,
                    "name"=> "Departamento Sarmiento",
                    "estate_id"=> 86
                ],
                [
                    "id"=> 86189,
                    "name"=> "Departamento Silípica",
                    "estate_id"=> 86
                ],
                [
                    "id"=> 90007,
                    "name"=> "Departamento Burruyacú",
                    "estate_id"=> 90
                ],
                [
                    "id"=> 90014,
                    "name"=> "Departamento Cruz Alta",
                    "estate_id"=> 90
                ],
                [
                    "id"=> 90021,
                    "name"=> "Departamento Chicligasta",
                    "estate_id"=> 90
                ],
                [
                    "id"=> 90028,
                    "name"=> "Departamento Famaillá",
                    "estate_id"=> 90
                ],
                [
                    "id"=> 90035,
                    "name"=> "Departamento Graneros",
                    "estate_id"=> 90
                ],
                [
                    "id"=> 90042,
                    "name"=> "Departamento Juan Bautista Alberdi",
                    "estate_id"=> 90
                ],
                [
                    "id"=> 90049,
                    "name"=> "Departamento La Cocha",
                    "estate_id"=> 90
                ],
                [
                    "id"=> 90056,
                    "name"=> "Departamento Leales",
                    "estate_id"=> 90
                ],
                [
                    "id"=> 90063,
                    "name"=> "Departamento Lules",
                    "estate_id"=> 90
                ],
                [
                    "id"=> 90070,
                    "name"=> "Departamento Monteros",
                    "estate_id"=> 90
                ],
                [
                    "id"=> 90077,
                    "name"=> "Departamento Río Chico",
                    "estate_id"=> 90
                ],
                [
                    "id"=> 90084,
                    "name"=> "Departamento Capital",
                    "estate_id"=> 90
                ],
                [
                    "id"=> 90091,
                    "name"=> "Departamento Simoca",
                    "estate_id"=> 90
                ],
                [
                    "id"=> 90098,
                    "name"=> "Departamento Tafí del Valle",
                    "estate_id"=> 90
                ],
                [
                    "id"=> 90105,
                    "name"=> "Departamento Tafí Viejo",
                    "estate_id"=> 90
                ],
                [
                    "id"=> 90112,
                    "name"=> "Departamento Trancas",
                    "estate_id"=> 90
                ],
                [
                    "id"=> 90119,
                    "name"=> "Departamento Yerba Buena",
                    "estate_id"=> 90
                ],
                [
                    "id"=> 94008,
                    "name"=> "Departamento Río Grande",
                    "estate_id"=> 94
                ],
                [
                    "id"=> 94011,
                    "name"=> "Departamento Río Grande",
                    "estate_id"=> 94
                ],
                [
                    "id"=> 94015,
                    "name"=> "Departamento Ushuaia",
                    "estate_id"=> 94
                ],
                [
                    "id"=> 94021,
                    "name"=> "Departamento Islas del Atlántico Sur",
                    "estate_id"=> 94
                ],
                [
                    "id"=> 94028,
                    "name"=> "Departamento Antártida Argentina",
                    "estate_id"=> 94
                ]
            ]
        );

    }
}
