<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Municipality;

class MunicipalitiesSeeder extends Seeder
{
    public function run(): void
    {
    /* MunicipalityS */
		Municipality::create(['id' => 1, 'federals_state_id' => 1, 'name'=> 'Alto Orinoco' ]);
		Municipality::create(['id' => 2, 'federals_state_id' => 1, 'name'=> 'Atabapo' ]);
		Municipality::create(['id' => 3, 'federals_state_id' => 1, 'name'=> 'Atures' ]);
		Municipality::create(['id' => 4, 'federals_state_id' => 1, 'name'=> 'Autana' ]);
		Municipality::create(['id' => 5, 'federals_state_id' => 1, 'name'=> 'Manapiare' ]);
		Municipality::create(['id' => 6, 'federals_state_id' => 1, 'name'=> 'Maroa' ]);
		Municipality::create(['id' => 7, 'federals_state_id' => 1, 'name'=> 'Río Negro' ]);
		Municipality::create(['id' => 8, 'federals_state_id' => 2, 'name'=> 'Anaco' ]);
		Municipality::create(['id' => 9, 'federals_state_id' => 2, 'name'=> 'Aragua' ]);
		Municipality::create(['id' => 10, 'federals_state_id' => 2, 'name'=> 'Manuel Ezequiel Bruzual' ]);
		Municipality::create(['id' => 11, 'federals_state_id' => 2, 'name'=> 'Diego Bautista Urbaneja' ]);
		Municipality::create(['id' => 12, 'federals_state_id' => 2, 'name'=> 'Fernando Peñalver' ]);
		Municipality::create(['id' => 13, 'federals_state_id' => 2, 'name'=> 'Francisco Del Carmen Carvajal' ]);
		Municipality::create(['id' => 14, 'federals_state_id' => 2, 'name'=> 'General Sir Arthur McGregor' ]);
		Municipality::create(['id' => 15, 'federals_state_id' => 2, 'name'=> 'Guanta' ]);
		Municipality::create(['id' => 16, 'federals_state_id' => 2, 'name'=> 'Independencia' ]);
		Municipality::create(['id' => 17, 'federals_state_id' => 2, 'name'=> 'José Gregorio Monagas' ]);
		Municipality::create(['id' => 18, 'federals_state_id' => 2, 'name'=> 'Juan Antonio Sotillo' ]);
		Municipality::create(['id' => 19, 'federals_state_id' => 2, 'name'=> 'Juan Manuel Cajigal' ]);
		Municipality::create(['id' => 20, 'federals_state_id' => 2, 'name'=> 'Libertad' ]);
		Municipality::create(['id' => 21, 'federals_state_id' => 2, 'name'=> 'Francisco de Miranda' ]);
		Municipality::create(['id' => 22, 'federals_state_id' => 2, 'name'=> 'Pedro María Freites' ]);
		Municipality::create(['id' => 23, 'federals_state_id' => 2, 'name'=> 'Píritu' ]);
		Municipality::create(['id' => 24, 'federals_state_id' => 2, 'name'=> 'San José de Guanipa' ]);
		Municipality::create(['id' => 25, 'federals_state_id' => 2, 'name'=> 'San Juan de Capistrano' ]);
		Municipality::create(['id' => 26, 'federals_state_id' => 2, 'name'=> 'Santa Ana' ]);
		Municipality::create(['id' => 27, 'federals_state_id' => 2, 'name'=> 'Simón Bolívar' ]);
		Municipality::create(['id' => 28, 'federals_state_id' => 2, 'name'=> 'Simón Rodríguez' ]);
		Municipality::create(['id' => 29, 'federals_state_id' => 3, 'name'=> 'Achaguas' ]);
		Municipality::create(['id' => 30, 'federals_state_id' => 3, 'name'=> 'Biruaca' ]);
		Municipality::create(['id' => 31, 'federals_state_id' => 3, 'name'=> 'Muñóz' ]);
		Municipality::create(['id' => 32, 'federals_state_id' => 3, 'name'=> 'Páez' ]);
		Municipality::create(['id' => 33, 'federals_state_id' => 3, 'name'=> 'Pedro Camejo' ]);
		Municipality::create(['id' => 34, 'federals_state_id' => 3, 'name'=> 'Rómulo Gallegos' ]);
		Municipality::create(['id' => 35, 'federals_state_id' => 3, 'name'=> 'San Fernando' ]);
		Municipality::create(['id' => 36, 'federals_state_id' => 4, 'name'=> 'Atanasio Girardot' ]);
		Municipality::create(['id' => 37, 'federals_state_id' => 4, 'name'=> 'Bolívar' ]);
		Municipality::create(['id' => 38, 'federals_state_id' => 4, 'name'=> 'Camatagua' ]);
		Municipality::create(['id' => 39, 'federals_state_id' => 4, 'name'=> 'Francisco Linares Alcántara' ]);
		Municipality::create(['id' => 40, 'federals_state_id' => 4, 'name'=> 'José Ángel Lamas' ]);
		Municipality::create(['id' => 41, 'federals_state_id' => 4, 'name'=> 'José Félix Ribas' ]);
		Municipality::create(['id' => 42, 'federals_state_id' => 4, 'name'=> 'José Rafael Revenga' ]);
		Municipality::create(['id' => 43, 'federals_state_id' => 4, 'name'=> 'Libertador' ]);
		Municipality::create(['id' => 44, 'federals_state_id' => 4, 'name'=> 'Mario Briceño Iragorry' ]);
		Municipality::create(['id' => 45, 'federals_state_id' => 4, 'name'=> 'Ocumare de la Costa de Oro' ]);
		Municipality::create(['id' => 46, 'federals_state_id' => 4, 'name'=> 'San Casimiro' ]);
		Municipality::create(['id' => 47, 'federals_state_id' => 4, 'name'=> 'San Sebastián' ]);
		Municipality::create(['id' => 48, 'federals_state_id' => 4, 'name'=> 'Santiago Mariño' ]);
		Municipality::create(['id' => 49, 'federals_state_id' => 4, 'name'=> 'Santos Michelena' ]);
		Municipality::create(['id' => 50, 'federals_state_id' => 4, 'name'=> 'Sucre' ]);
		Municipality::create(['id' => 51, 'federals_state_id' => 4, 'name'=> 'Tovar' ]);
		Municipality::create(['id' => 52, 'federals_state_id' => 4, 'name'=> 'Urdaneta' ]);
		Municipality::create(['id' => 53, 'federals_state_id' => 4, 'name'=> 'Zamora' ]);
		Municipality::create(['id' => 54, 'federals_state_id' => 5, 'name'=> 'Alberto Arvelo Torrealba' ]);
		Municipality::create(['id' => 55, 'federals_state_id' => 5, 'name'=> 'Andrés Eloy Blanco' ]);
		Municipality::create(['id' => 56, 'federals_state_id' => 5, 'name'=> 'Antonio José de Sucre' ]);
		Municipality::create(['id' => 57, 'federals_state_id' => 5, 'name'=> 'Arismendi' ]);
		Municipality::create(['id' => 58, 'federals_state_id' => 5, 'name'=> 'Barinas' ]);
		Municipality::create(['id' => 59, 'federals_state_id' => 5, 'name'=> 'Bolívar' ]);
		Municipality::create(['id' => 60, 'federals_state_id' => 5, 'name'=> 'Cruz Paredes' ]);
		Municipality::create(['id' => 61, 'federals_state_id' => 5, 'name'=> 'Ezequiel Zamora' ]);
		Municipality::create(['id' => 62, 'federals_state_id' => 5, 'name'=> 'Obispos' ]);
		Municipality::create(['id' => 63, 'federals_state_id' => 5, 'name'=> 'Pedraza' ]);
		Municipality::create(['id' => 64, 'federals_state_id' => 5, 'name'=> 'Rojas' ]);
		Municipality::create(['id' => 65, 'federals_state_id' => 5, 'name'=> 'Sosa' ]);
		Municipality::create(['id' => 66, 'federals_state_id' => 6, 'name'=> 'Caroní' ]);
		Municipality::create(['id' => 67, 'federals_state_id' => 6, 'name'=> 'Cedeño' ]);
		Municipality::create(['id' => 68, 'federals_state_id' => 6, 'name'=> 'El Callao' ]);
		Municipality::create(['id' => 69, 'federals_state_id' => 6, 'name'=> 'Gran Sabana' ]);
		Municipality::create(['id' => 70, 'federals_state_id' => 6, 'name'=> 'Heres' ]);
		Municipality::create(['id' => 71, 'federals_state_id' => 6, 'name'=> 'Piar' ]);
		Municipality::create(['id' => 72, 'federals_state_id' => 6, 'name'=> 'Angostura (Raúl Leoni)' ]);
		Municipality::create(['id' => 73, 'federals_state_id' => 6, 'name'=> 'Roscio' ]);
		Municipality::create(['id' => 74, 'federals_state_id' => 6, 'name'=> 'Sifontes' ]);
		Municipality::create(['id' => 75, 'federals_state_id' => 6, 'name'=> 'Sucre' ]);
		Municipality::create(['id' => 76, 'federals_state_id' => 6, 'name'=> 'Padre Pedro Chien' ]);
		Municipality::create(['id' => 77, 'federals_state_id' => 7, 'name'=> 'Bejuma' ]);
		Municipality::create(['id' => 78, 'federals_state_id' => 7, 'name'=> 'Carlos Arvelo' ]);
		Municipality::create(['id' => 79, 'federals_state_id' => 7, 'name'=> 'Diego Ibarra' ]);
		Municipality::create(['id' => 80, 'federals_state_id' => 7, 'name'=> 'Guacara' ]);
		Municipality::create(['id' => 81, 'federals_state_id' => 7, 'name'=> 'Juan José Mora' ]);
		Municipality::create(['id' => 82, 'federals_state_id' => 7, 'name'=> 'Libertador' ]);
		Municipality::create(['id' => 83, 'federals_state_id' => 7, 'name'=> 'Los Guayos' ]);
		Municipality::create(['id' => 84, 'federals_state_id' => 7, 'name'=> 'Miranda' ]);
		Municipality::create(['id' => 85, 'federals_state_id' => 7, 'name'=> 'Montalbán' ]);
		Municipality::create(['id' => 86, 'federals_state_id' => 7, 'name'=> 'Naguanagua' ]);
		Municipality::create(['id' => 87, 'federals_state_id' => 7, 'name'=> 'Puerto Cabello' ]);
		Municipality::create(['id' => 88, 'federals_state_id' => 7, 'name'=> 'San Diego' ]);
		Municipality::create(['id' => 89, 'federals_state_id' => 7, 'name'=> 'San Joaquín' ]);
		Municipality::create(['id' => 90, 'federals_state_id' => 7, 'name'=> 'Valencia' ]);
		Municipality::create(['id' => 91, 'federals_state_id' => 8, 'name'=> 'Anzoátegui' ]);
		Municipality::create(['id' => 92, 'federals_state_id' => 8, 'name'=> 'Tinaquillo' ]);
		Municipality::create(['id' => 93, 'federals_state_id' => 8, 'name'=> 'Girardot' ]);
		Municipality::create(['id' => 94, 'federals_state_id' => 8, 'name'=> 'Lima Blanco' ]);
		Municipality::create(['id' => 95, 'federals_state_id' => 8, 'name'=> 'Pao de San Juan Bautista' ]);
		Municipality::create(['id' => 96, 'federals_state_id' => 8, 'name'=> 'Ricaurte' ]);
		Municipality::create(['id' => 97, 'federals_state_id' => 8, 'name'=> 'Rómulo Gallegos' ]);
		Municipality::create(['id' => 98, 'federals_state_id' => 8, 'name'=> 'San Carlos' ]);
		Municipality::create(['id' => 99, 'federals_state_id' => 8, 'name'=> 'Tinaco' ]);
		Municipality::create(['id' => 100, 'federals_state_id' => 9, 'name'=> 'Antonio Díaz' ]);
		Municipality::create(['id' => 101, 'federals_state_id' => 9, 'name'=> 'Casacoima' ]);
		Municipality::create(['id' => 102, 'federals_state_id' => 9, 'name'=> 'Pedernales' ]);
		Municipality::create(['id' => 103, 'federals_state_id' => 9, 'name'=> 'Tucupita' ]);
		Municipality::create(['id' => 104, 'federals_state_id' => 10, 'name'=> 'Acosta' ]);
		Municipality::create(['id' => 105, 'federals_state_id' => 10, 'name'=> 'Bolívar' ]);
		Municipality::create(['id' => 106, 'federals_state_id' => 10, 'name'=> 'Buchivacoa' ]);
		Municipality::create(['id' => 107, 'federals_state_id' => 10, 'name'=> 'Cacique Manaure' ]);
		Municipality::create(['id' => 108, 'federals_state_id' => 10, 'name'=> 'Carirubana' ]);
		Municipality::create(['id' => 109, 'federals_state_id' => 10, 'name'=> 'Colina' ]);
		Municipality::create(['id' => 110, 'federals_state_id' => 10, 'name'=> 'Dabajuro' ]);
		Municipality::create(['id' => 111, 'federals_state_id' => 10, 'name'=> 'Democracia' ]);
		Municipality::create(['id' => 112, 'federals_state_id' => 10, 'name'=> 'Falcón' ]);
		Municipality::create(['id' => 113, 'federals_state_id' => 10, 'name'=> 'Federación' ]);
		Municipality::create(['id' => 114, 'federals_state_id' => 10, 'name'=> 'Jacura' ]);
		Municipality::create(['id' => 115, 'federals_state_id' => 10, 'name'=> 'José Laurencio Silva' ]);
		Municipality::create(['id' => 116, 'federals_state_id' => 10, 'name'=> 'Los Taques' ]);
		Municipality::create(['id' => 117, 'federals_state_id' => 10, 'name'=> 'Mauroa' ]);
		Municipality::create(['id' => 118, 'federals_state_id' => 10, 'name'=> 'Miranda' ]);
		Municipality::create(['id' => 119, 'federals_state_id' => 10, 'name'=> 'Monseñor Iturriza' ]);
		Municipality::create(['id' => 120, 'federals_state_id' => 10, 'name'=> 'Palmasola' ]);
		Municipality::create(['id' => 121, 'federals_state_id' => 10, 'name'=> 'Petit' ]);
		Municipality::create(['id' => 122, 'federals_state_id' => 10, 'name'=> 'Píritu' ]);
		Municipality::create(['id' => 123, 'federals_state_id' => 10, 'name'=> 'San Francisco' ]);
		Municipality::create(['id' => 124, 'federals_state_id' => 10, 'name'=> 'Sucre' ]);
		Municipality::create(['id' => 125, 'federals_state_id' => 10, 'name'=> 'Tocópero' ]);
		Municipality::create(['id' => 126, 'federals_state_id' => 10, 'name'=> 'Unión' ]);
		Municipality::create(['id' => 127, 'federals_state_id' => 10, 'name'=> 'Urumaco' ]);
		Municipality::create(['id' => 128, 'federals_state_id' => 10, 'name'=> 'Zamora' ]);
		Municipality::create(['id' => 129, 'federals_state_id' => 11, 'name'=> 'Camaguán' ]);
		Municipality::create(['id' => 130, 'federals_state_id' => 11, 'name'=> 'Chaguaramas' ]);
		Municipality::create(['id' => 131, 'federals_state_id' => 11, 'name'=> 'El Socorro' ]);
		Municipality::create(['id' => 132, 'federals_state_id' => 11, 'name'=> 'José Félix Ribas' ]);
		Municipality::create(['id' => 133, 'federals_state_id' => 11, 'name'=> 'José Tadeo Monagas' ]);
		Municipality::create(['id' => 134, 'federals_state_id' => 11, 'name'=> 'Juan Germán Roscio' ]);
		Municipality::create(['id' => 135, 'federals_state_id' => 11, 'name'=> 'Julián Mellado' ]);
		Municipality::create(['id' => 136, 'federals_state_id' => 11, 'name'=> 'Las Mercedes' ]);
		Municipality::create(['id' => 137, 'federals_state_id' => 11, 'name'=> 'Leonardo Infante' ]);
		Municipality::create(['id' => 138, 'federals_state_id' => 11, 'name'=> 'Pedro Zaraza' ]);
		Municipality::create(['id' => 139, 'federals_state_id' => 11, 'name'=> 'Ortíz' ]);
		Municipality::create(['id' => 140, 'federals_state_id' => 11, 'name'=> 'San Gerónimo de Guayabal' ]);
		Municipality::create(['id' => 141, 'federals_state_id' => 11, 'name'=> 'San José de Guaribe' ]);
		Municipality::create(['id' => 142, 'federals_state_id' => 11, 'name'=> 'Santa María de Ipire' ]);
		Municipality::create(['id' => 143, 'federals_state_id' => 11, 'name'=> 'Sebastián Francisco de Miranda' ]);
		Municipality::create(['id' => 144, 'federals_state_id' => 12, 'name'=> 'Andrés Eloy Blanco' ]);
		Municipality::create(['id' => 145, 'federals_state_id' => 12, 'name'=> 'Crespo' ]);
		Municipality::create(['id' => 146, 'federals_state_id' => 12, 'name'=> 'Iribarren' ]);
		Municipality::create(['id' => 147, 'federals_state_id' => 12, 'name'=> 'Jiménez' ]);
		Municipality::create(['id' => 148, 'federals_state_id' => 12, 'name'=> 'Morán' ]);
		Municipality::create(['id' => 149, 'federals_state_id' => 12, 'name'=> 'Palavecino' ]);
		Municipality::create(['id' => 150, 'federals_state_id' => 12, 'name'=> 'Simón Planas' ]);
		Municipality::create(['id' => 151, 'federals_state_id' => 12, 'name'=> 'Torres' ]);
		Municipality::create(['id' => 152, 'federals_state_id' => 12, 'name'=> 'Urdaneta' ]);
		Municipality::create(['id' => 179, 'federals_state_id' => 13, 'name'=> 'Alberto Adriani' ]);
		Municipality::create(['id' => 180, 'federals_state_id' => 13, 'name'=> 'Andrés Bello' ]);
		Municipality::create(['id' => 181, 'federals_state_id' => 13, 'name'=> 'Antonio Pinto Salinas' ]);
		Municipality::create(['id' => 182, 'federals_state_id' => 13, 'name'=> 'Aricagua' ]);
		Municipality::create(['id' => 183, 'federals_state_id' => 13, 'name'=> 'Arzobispo Chacón' ]);
		Municipality::create(['id' => 184, 'federals_state_id' => 13, 'name'=> 'Campo Elías' ]);
		Municipality::create(['id' => 185, 'federals_state_id' => 13, 'name'=> 'Caracciolo Parra Olmedo' ]);
		Municipality::create(['id' => 186, 'federals_state_id' => 13, 'name'=> 'Cardenal Quintero' ]);
		Municipality::create(['id' => 187, 'federals_state_id' => 13, 'name'=> 'Guaraque' ]);
		Municipality::create(['id' => 188, 'federals_state_id' => 13, 'name'=> 'Julio César Salas' ]);
		Municipality::create(['id' => 189, 'federals_state_id' => 13, 'name'=> 'Justo Briceño' ]);
		Municipality::create(['id' => 190, 'federals_state_id' => 13, 'name'=> 'Libertador' ]);
		Municipality::create(['id' => 191, 'federals_state_id' => 13, 'name'=> 'Miranda' ]);
		Municipality::create(['id' => 192, 'federals_state_id' => 13, 'name'=> 'Obispo Ramos de Lora' ]);
		Municipality::create(['id' => 193, 'federals_state_id' => 13, 'name'=> 'Padre Noguera' ]);
		Municipality::create(['id' => 194, 'federals_state_id' => 13, 'name'=> 'Pueblo Llano' ]);
		Municipality::create(['id' => 195, 'federals_state_id' => 13, 'name'=> 'Rangel' ]);
		Municipality::create(['id' => 196, 'federals_state_id' => 13, 'name'=> 'Rivas Dávila' ]);
		Municipality::create(['id' => 197, 'federals_state_id' => 13, 'name'=> 'Santos Marquina' ]);
		Municipality::create(['id' => 198, 'federals_state_id' => 13, 'name'=> 'Sucre' ]);
		Municipality::create(['id' => 199, 'federals_state_id' => 13, 'name'=> 'Tovar' ]);
		Municipality::create(['id' => 200, 'federals_state_id' => 13, 'name'=> 'Tulio Febres Cordero' ]);
		Municipality::create(['id' => 201, 'federals_state_id' => 13, 'name'=> 'Zea' ]);
		Municipality::create(['id' => 223, 'federals_state_id' => 14, 'name'=> 'Acevedo' ]);
		Municipality::create(['id' => 224, 'federals_state_id' => 14, 'name'=> 'Andrés Bello' ]);
		Municipality::create(['id' => 225, 'federals_state_id' => 14, 'name'=> 'Baruta' ]);
		Municipality::create(['id' => 226, 'federals_state_id' => 14, 'name'=> 'Brión' ]);
		Municipality::create(['id' => 227, 'federals_state_id' => 14, 'name'=> 'Buroz' ]);
		Municipality::create(['id' => 228, 'federals_state_id' => 14, 'name'=> 'Carrizal' ]);
		Municipality::create(['id' => 229, 'federals_state_id' => 14, 'name'=> 'Chacao' ]);
		Municipality::create(['id' => 230, 'federals_state_id' => 14, 'name'=> 'Cristóbal Rojas' ]);
		Municipality::create(['id' => 231, 'federals_state_id' => 14, 'name'=> 'El Hatillo' ]);
		Municipality::create(['id' => 232, 'federals_state_id' => 14, 'name'=> 'Guaicaipuro' ]);
		Municipality::create(['id' => 233, 'federals_state_id' => 14, 'name'=> 'Independencia' ]);
		Municipality::create(['id' => 234, 'federals_state_id' => 14, 'name'=> 'Lander' ]);
		Municipality::create(['id' => 235, 'federals_state_id' => 14, 'name'=> 'Los Salias' ]);
		Municipality::create(['id' => 236, 'federals_state_id' => 14, 'name'=> 'Páez' ]);
		Municipality::create(['id' => 237, 'federals_state_id' => 14, 'name'=> 'Paz Castillo' ]);
		Municipality::create(['id' => 238, 'federals_state_id' => 14, 'name'=> 'Pedro Gual' ]);
		Municipality::create(['id' => 239, 'federals_state_id' => 14, 'name'=> 'Plaza' ]);
		Municipality::create(['id' => 240, 'federals_state_id' => 14, 'name'=> 'Simón Bolívar' ]);
		Municipality::create(['id' => 241, 'federals_state_id' => 14, 'name'=> 'Sucre' ]);
		Municipality::create(['id' => 242, 'federals_state_id' => 14, 'name'=> 'Urdaneta' ]);
		Municipality::create(['id' => 243, 'federals_state_id' => 14, 'name'=> 'Zamora' ]);
		Municipality::create(['id' => 258, 'federals_state_id' => 15, 'name'=> 'Acosta' ]);
		Municipality::create(['id' => 259, 'federals_state_id' => 15, 'name'=> 'Aguasay' ]);
		Municipality::create(['id' => 260, 'federals_state_id' => 15, 'name'=> 'Bolívar' ]);
		Municipality::create(['id' => 261, 'federals_state_id' => 15, 'name'=> 'Caripe' ]);
		Municipality::create(['id' => 262, 'federals_state_id' => 15, 'name'=> 'Cedeño' ]);
		Municipality::create(['id' => 263, 'federals_state_id' => 15, 'name'=> 'Ezequiel Zamora' ]);
		Municipality::create(['id' => 264, 'federals_state_id' => 15, 'name'=> 'Libertador' ]);
		Municipality::create(['id' => 265, 'federals_state_id' => 15, 'name'=> 'Maturín' ]);
		Municipality::create(['id' => 266, 'federals_state_id' => 15, 'name'=> 'Piar' ]);
		Municipality::create(['id' => 267, 'federals_state_id' => 15, 'name'=> 'Punceres' ]);
		Municipality::create(['id' => 268, 'federals_state_id' => 15, 'name'=> 'Santa Bárbara' ]);
		Municipality::create(['id' => 269, 'federals_state_id' => 15, 'name'=> 'Sotillo' ]);
		Municipality::create(['id' => 270, 'federals_state_id' => 15, 'name'=> 'Uracoa' ]);
		Municipality::create(['id' => 271, 'federals_state_id' => 16, 'name'=> 'Antolín del Campo' ]);
		Municipality::create(['id' => 272, 'federals_state_id' => 16, 'name'=> 'Arismendi' ]);
		Municipality::create(['id' => 273, 'federals_state_id' => 16, 'name'=> 'García' ]);
		Municipality::create(['id' => 274, 'federals_state_id' => 16, 'name'=> 'Gómez' ]);
		Municipality::create(['id' => 275, 'federals_state_id' => 16, 'name'=> 'Maneiro' ]);
		Municipality::create(['id' => 276, 'federals_state_id' => 16, 'name'=> 'Marcano' ]);
		Municipality::create(['id' => 277, 'federals_state_id' => 16, 'name'=> 'Mariño' ]);
		Municipality::create(['id' => 278, 'federals_state_id' => 16, 'name'=> 'Península de Macanao' ]);
		Municipality::create(['id' => 279, 'federals_state_id' => 16, 'name'=> 'Tubores' ]);
		Municipality::create(['id' => 280, 'federals_state_id' => 16, 'name'=> 'Villalba' ]);
		Municipality::create(['id' => 281, 'federals_state_id' => 16, 'name'=> 'Díaz' ]);
		Municipality::create(['id' => 282, 'federals_state_id' => 17, 'name'=> 'Agua Blanca' ]);
		Municipality::create(['id' => 283, 'federals_state_id' => 17, 'name'=> 'Araure' ]);
		Municipality::create(['id' => 284, 'federals_state_id' => 17, 'name'=> 'Esteller' ]);
		Municipality::create(['id' => 285, 'federals_state_id' => 17, 'name'=> 'Guanare' ]);
		Municipality::create(['id' => 286, 'federals_state_id' => 17, 'name'=> 'Guanarito' ]);
		Municipality::create(['id' => 287, 'federals_state_id' => 17, 'name'=> 'Monseñor José Vicente de Unda' ]);
		Municipality::create(['id' => 288, 'federals_state_id' => 17, 'name'=> 'Ospino' ]);
		Municipality::create(['id' => 289, 'federals_state_id' => 17, 'name'=> 'Páez' ]);
		Municipality::create(['id' => 290, 'federals_state_id' => 17, 'name'=> 'Papelón' ]);
		Municipality::create(['id' => 291, 'federals_state_id' => 17, 'name'=> 'San Genaro de Boconoíto' ]);
		Municipality::create(['id' => 292, 'federals_state_id' => 17, 'name'=> 'San Rafael de Onoto' ]);
		Municipality::create(['id' => 293, 'federals_state_id' => 17, 'name'=> 'Santa Rosalía' ]);
		Municipality::create(['id' => 294, 'federals_state_id' => 17, 'name'=> 'Sucre' ]);
		Municipality::create(['id' => 295, 'federals_state_id' => 17, 'name'=> 'Turén' ]);
		Municipality::create(['id' => 296, 'federals_state_id' => 18, 'name'=> 'Andrés Eloy Blanco' ]);
		Municipality::create(['id' => 297, 'federals_state_id' => 18, 'name'=> 'Andrés Mata' ]);
		Municipality::create(['id' => 298, 'federals_state_id' => 18, 'name'=> 'Arismendi' ]);
		Municipality::create(['id' => 299, 'federals_state_id' => 18, 'name'=> 'Benítez' ]);
		Municipality::create(['id' => 300, 'federals_state_id' => 18, 'name'=> 'Bermúdez' ]);
		Municipality::create(['id' => 301, 'federals_state_id' => 18, 'name'=> 'Bolívar' ]);
		Municipality::create(['id' => 302, 'federals_state_id' => 18, 'name'=> 'Cajigal' ]);
		Municipality::create(['id' => 303, 'federals_state_id' => 18, 'name'=> 'Cruz Salmerón Acosta' ]);
		Municipality::create(['id' => 304, 'federals_state_id' => 18, 'name'=> 'Libertador' ]);
		Municipality::create(['id' => 305, 'federals_state_id' => 18, 'name'=> 'Mariño' ]);
		Municipality::create(['id' => 306, 'federals_state_id' => 18, 'name'=> 'Mejía' ]);
		Municipality::create(['id' => 307, 'federals_state_id' => 18, 'name'=> 'Montes' ]);
		Municipality::create(['id' => 308, 'federals_state_id' => 18, 'name'=> 'Ribero' ]);
		Municipality::create(['id' => 309, 'federals_state_id' => 18, 'name'=> 'Sucre' ]);
		Municipality::create(['id' => 310, 'federals_state_id' => 18, 'name'=> 'Valdéz' ]);
		Municipality::create(['id' => 341, 'federals_state_id' => 19, 'name'=> 'Andrés Bello' ]);
		Municipality::create(['id' => 342, 'federals_state_id' => 19, 'name'=> 'Antonio Rómulo Costa' ]);
		Municipality::create(['id' => 343, 'federals_state_id' => 19, 'name'=> 'Ayacucho' ]);
		Municipality::create(['id' => 344, 'federals_state_id' => 19, 'name'=> 'Bolívar' ]);
		Municipality::create(['id' => 345, 'federals_state_id' => 19, 'name'=> 'Cárdenas' ]);
		Municipality::create(['id' => 346, 'federals_state_id' => 19, 'name'=> 'Córdoba' ]);
		Municipality::create(['id' => 347, 'federals_state_id' => 19, 'name'=> 'Fernández Feo' ]);
		Municipality::create(['id' => 348, 'federals_state_id' => 19, 'name'=> 'Francisco de Miranda' ]);
		Municipality::create(['id' => 349, 'federals_state_id' => 19, 'name'=> 'García de Hevia' ]);
		Municipality::create(['id' => 350, 'federals_state_id' => 19, 'name'=> 'Guásimos' ]);
		Municipality::create(['id' => 351, 'federals_state_id' => 19, 'name'=> 'Independencia' ]);
		Municipality::create(['id' => 352, 'federals_state_id' => 19, 'name'=> 'Jáuregui' ]);
		Municipality::create(['id' => 353, 'federals_state_id' => 19, 'name'=> 'José María Vargas' ]);
		Municipality::create(['id' => 354, 'federals_state_id' => 19, 'name'=> 'Junín' ]);
		Municipality::create(['id' => 355, 'federals_state_id' => 19, 'name'=> 'Libertad' ]);
		Municipality::create(['id' => 356, 'federals_state_id' => 19, 'name'=> 'Libertador' ]);
		Municipality::create(['id' => 357, 'federals_state_id' => 19, 'name'=> 'Lobatera' ]);
		Municipality::create(['id' => 358, 'federals_state_id' => 19, 'name'=> 'Michelena' ]);
		Municipality::create(['id' => 359, 'federals_state_id' => 19, 'name'=> 'Panamericano' ]);
		Municipality::create(['id' => 360, 'federals_state_id' => 19, 'name'=> 'Pedro María Ureña' ]);
		Municipality::create(['id' => 361, 'federals_state_id' => 19, 'name'=> 'Rafael Urdaneta' ]);
		Municipality::create(['id' => 362, 'federals_state_id' => 19, 'name'=> 'Samuel Darío Maldonado' ]);
		Municipality::create(['id' => 363, 'federals_state_id' => 19, 'name'=> 'San Cristóbal' ]);
		Municipality::create(['id' => 364, 'federals_state_id' => 19, 'name'=> 'Seboruco' ]);
		Municipality::create(['id' => 365, 'federals_state_id' => 19, 'name'=> 'Simón Rodríguez' ]);
		Municipality::create(['id' => 366, 'federals_state_id' => 19, 'name'=> 'Sucre' ]);
		Municipality::create(['id' => 367, 'federals_state_id' => 19, 'name'=> 'Torbes' ]);
		Municipality::create(['id' => 368, 'federals_state_id' => 19, 'name'=> 'Uribante' ]);
		Municipality::create(['id' => 369, 'federals_state_id' => 19, 'name'=> 'San Judas Tadeo' ]);
		Municipality::create(['id' => 370, 'federals_state_id' => 20, 'name'=> 'Andrés Bello' ]);
		Municipality::create(['id' => 371, 'federals_state_id' => 20, 'name'=> 'Boconó' ]);
		Municipality::create(['id' => 372, 'federals_state_id' => 20, 'name'=> 'Bolívar' ]);
		Municipality::create(['id' => 373, 'federals_state_id' => 20, 'name'=> 'Candelaria' ]);
		Municipality::create(['id' => 374, 'federals_state_id' => 20, 'name'=> 'Carache' ]);
		Municipality::create(['id' => 375, 'federals_state_id' => 20, 'name'=> 'Escuque' ]);
		Municipality::create(['id' => 376, 'federals_state_id' => 20, 'name'=> 'José Felipe Márquez Cañizalez' ]);
		Municipality::create(['id' => 377, 'federals_state_id' => 20, 'name'=> 'Juan Vicente Campos Elías' ]);
		Municipality::create(['id' => 378, 'federals_state_id' => 20, 'name'=> 'La Ceiba' ]);
		Municipality::create(['id' => 379, 'federals_state_id' => 20, 'name'=> 'Miranda' ]);
		Municipality::create(['id' => 380, 'federals_state_id' => 20, 'name'=> 'Monte Carmelo' ]);
		Municipality::create(['id' => 381, 'federals_state_id' => 20, 'name'=> 'Motatán' ]);
		Municipality::create(['id' => 382, 'federals_state_id' => 20, 'name'=> 'Pampán' ]);
		Municipality::create(['id' => 383, 'federals_state_id' => 20, 'name'=> 'Pampanito' ]);
		Municipality::create(['id' => 384, 'federals_state_id' => 20, 'name'=> 'Rafael Rangel' ]);
		Municipality::create(['id' => 385, 'federals_state_id' => 20, 'name'=> 'San Rafael de Carvajal' ]);
		Municipality::create(['id' => 386, 'federals_state_id' => 20, 'name'=> 'Sucre' ]);
		Municipality::create(['id' => 387, 'federals_state_id' => 20, 'name'=> 'Trujillo' ]);
		Municipality::create(['id' => 388, 'federals_state_id' => 20, 'name'=> 'Urdaneta' ]);
		Municipality::create(['id' => 389, 'federals_state_id' => 20, 'name'=> 'Valera' ]);
		Municipality::create(['id' => 390, 'federals_state_id' => 21, 'name'=> 'Vargas' ]);
		Municipality::create(['id' => 391, 'federals_state_id' => 22, 'name'=> 'Arístides Bastidas' ]);
		Municipality::create(['id' => 392, 'federals_state_id' => 22, 'name'=> 'Bolívar' ]);
		Municipality::create(['id' => 407, 'federals_state_id' => 22, 'name'=> 'Bruzual' ]);
		Municipality::create(['id' => 408, 'federals_state_id' => 22, 'name'=> 'Cocorote' ]);
		Municipality::create(['id' => 409, 'federals_state_id' => 22, 'name'=> 'Independencia' ]);
		Municipality::create(['id' => 410, 'federals_state_id' => 22, 'name'=> 'José Antonio Páez' ]);
		Municipality::create(['id' => 411, 'federals_state_id' => 22, 'name'=> 'La Trinidad' ]);
		Municipality::create(['id' => 412, 'federals_state_id' => 22, 'name'=> 'Manuel Monge' ]);
		Municipality::create(['id' => 413, 'federals_state_id' => 22, 'name'=> 'Nirgua' ]);
		Municipality::create(['id' => 414, 'federals_state_id' => 22, 'name'=> 'Peña' ]);
		Municipality::create(['id' => 415, 'federals_state_id' => 22, 'name'=> 'San Felipe' ]);
		Municipality::create(['id' => 416, 'federals_state_id' => 22, 'name'=> 'Sucre' ]);
		Municipality::create(['id' => 417, 'federals_state_id' => 22, 'name'=> 'Urachiche' ]);
		Municipality::create(['id' => 418, 'federals_state_id' => 22, 'name'=> 'José Joaquín Veroes' ]);
		Municipality::create(['id' => 441, 'federals_state_id' => 23, 'name'=> 'Almirante Padilla' ]);
		Municipality::create(['id' => 442, 'federals_state_id' => 23, 'name'=> 'Baralt' ]);
		Municipality::create(['id' => 443, 'federals_state_id' => 23, 'name'=> 'Cabimas' ]);
		Municipality::create(['id' => 444, 'federals_state_id' => 23, 'name'=> 'Catatumbo' ]);
		Municipality::create(['id' => 445, 'federals_state_id' => 23, 'name'=> 'Colón' ]);
		Municipality::create(['id' => 446, 'federals_state_id' => 23, 'name'=> 'Francisco Javier Pulgar' ]);
		Municipality::create(['id' => 447, 'federals_state_id' => 23, 'name'=> 'Páez' ]);
		Municipality::create(['id' => 448, 'federals_state_id' => 23, 'name'=> 'Jesús Enrique Losada' ]);
		Municipality::create(['id' => 449, 'federals_state_id' => 23, 'name'=> 'Jesús María Semprún' ]);
		Municipality::create(['id' => 450, 'federals_state_id' => 23, 'name'=> 'La Cañada de Urdaneta' ]);
		Municipality::create(['id' => 451, 'federals_state_id' => 23, 'name'=> 'Lagunillas' ]);
		Municipality::create(['id' => 452, 'federals_state_id' => 23, 'name'=> 'Machiques de Perijá' ]);
		Municipality::create(['id' => 453, 'federals_state_id' => 23, 'name'=> 'Mara' ]);
		Municipality::create(['id' => 454, 'federals_state_id' => 23, 'name'=> 'Maracaibo' ]);
		Municipality::create(['id' => 455, 'federals_state_id' => 23, 'name'=> 'Miranda' ]);
		Municipality::create(['id' => 456, 'federals_state_id' => 23, 'name'=> 'Rosario de Perijá' ]);
		Municipality::create(['id' => 457, 'federals_state_id' => 23, 'name'=> 'San Francisco' ]);
		Municipality::create(['id' => 458, 'federals_state_id' => 23, 'name'=> 'Santa Rita' ]);
		Municipality::create(['id' => 459, 'federals_state_id' => 23, 'name'=> 'Simón Bolívar' ]);
		Municipality::create(['id' => 460, 'federals_state_id' => 23, 'name'=> 'Sucre' ]);
		Municipality::create(['id' => 461, 'federals_state_id' => 23, 'name'=> 'Valmore Rodríguez' ]);
		Municipality::create(['id' => 462, 'federals_state_id' => 24, 'name'=> 'Libertador' ]);
    }
}

