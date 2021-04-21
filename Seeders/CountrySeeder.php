<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actual_date = now();
        $countries = [
            [ 'iso' => 'AF', 'name' => 'Afganistán', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'AF', 'name' => 'Afganistán', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'AX', 'name' => 'Islas Gland', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'AL', 'name' => 'Albania', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'DE', 'name' => 'Alemania', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'AD', 'name' => 'Andorra', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'AO', 'name' => 'Angola', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'AI', 'name' => 'Anguilla', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'AQ', 'name' => 'Antártida', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'AG', 'name' => 'Antigua y Barbuda', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'AN', 'name' => 'Antillas Holandesas', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'SA', 'name' => 'Arabia Saudí', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'DZ', 'name' => 'Argelia', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'AR', 'name' => 'Argentina', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'AM', 'name' => 'Armenia', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'AW', 'name' => 'Aruba', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'AU', 'name' => 'Australia', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'AT', 'name' => 'Austria', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'AZ', 'name' => 'Azerbaiyán', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'BS', 'name' => 'Bahamas', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'BH', 'name' => 'Bahréin', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'BD', 'name' => 'Bangladesh', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'BB', 'name' => 'Barbados', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'BY', 'name' => 'Bielorrusia', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'BE', 'name' => 'Bélgica', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'BZ', 'name' => 'Belice', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'BJ', 'name' => 'Benin', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'BM', 'name' => 'Bermudas', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'BT', 'name' => 'Bhután', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'BO', 'name' => 'Bolivia', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'BA', 'name' => 'Bosnia y Herzegovina', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'BW', 'name' => 'Botsuana', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'BV', 'name' => 'Isla Bouvet', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'BR', 'name' => 'Brasil', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'BN', 'name' => 'Brunéi', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'BG', 'name' => 'Bulgaria', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'BF', 'name' => 'Burkina Faso', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'BI', 'name' => 'Burundi', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'CV', 'name' => 'Cabo Verde', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'KY', 'name' => 'Islas Caimán', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'KH', 'name' => 'Camboya', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'CM', 'name' => 'Camerún', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'CA', 'name' => 'Canadá', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'CF', 'name' => 'República Centroafricana', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'TD', 'name' => 'Chad', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'CZ', 'name' => 'República Checa', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'CL', 'name' => 'Chile', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'CN', 'name' => 'China', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'CY', 'name' => 'Chipre', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'CX', 'name' => 'Isla de Navidad', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'VA', 'name' => 'Ciudad del Vaticano', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'CC', 'name' => 'Islas Cocos', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'CO', 'name' => 'Colombia', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'KM', 'name' => 'Comoras', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'CD', 'name' => 'República Democrática del Congo', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'CG', 'name' => 'Congo', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'CK', 'name' => 'Islas Cook', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'KP', 'name' => 'Corea del Norte', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'KR', 'name' => 'Corea del Sur', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'CI', 'name' => 'Costa de Marfil', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'CR', 'name' => 'Costa Rica', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'HR', 'name' => 'Croacia', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'CU', 'name' => 'Cuba', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'DK', 'name' => 'Dinamarca', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'DM', 'name' => 'Dominica', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'DO', 'name' => 'República Dominicana', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'EC', 'name' => 'Ecuador', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'EG', 'name' => 'Egipto', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'SV', 'name' => 'El Salvador', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'AE', 'name' => 'Emiratos Árabes Unidos', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'ER', 'name' => 'Eritrea', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'SK', 'name' => 'Eslovaquia', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'SI', 'name' => 'Eslovenia', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'ES', 'name' => 'España', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'UM', 'name' => 'Islas ultramarinas de Estados Unidos', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'US', 'name' => 'Estados Unidos', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'EE', 'name' => 'Estonia', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'ET', 'name' => 'Etiopía', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'FO', 'name' => 'Islas Feroe', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'PH', 'name' => 'Filipinas', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'FI', 'name' => 'Finlandia', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'FJ', 'name' => 'Fiyi', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'FR', 'name' => 'Francia', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'GA', 'name' => 'Gabón', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'GM', 'name' => 'Gambia', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'GE', 'name' => 'Georgia', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'GS', 'name' => 'Islas Georgias del Sur y Sandwich del Sur', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'GH', 'name' => 'Ghana', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'GI', 'name' => 'Gibraltar', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'GD', 'name' => 'Granada', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'GR', 'name' => 'Grecia', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'GL', 'name' => 'Groenlandia', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'GP', 'name' => 'Guadalupe', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'GU', 'name' => 'Guam', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'GT', 'name' => 'Guatemala', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'GF', 'name' => 'Guayana Francesa', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'GN', 'name' => 'Guinea', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'GQ', 'name' => 'Guinea Ecuatorial', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'GW', 'name' => 'Guinea-Bissau', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'GY', 'name' => 'Guyana', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'HT', 'name' => 'Haití', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'HM', 'name' => 'Islas Heard y McDonald', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'HN', 'name' => 'Honduras', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'HK', 'name' => 'Hong Kong', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'HU', 'name' => 'Hungría', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'IN', 'name' => 'India', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'ID', 'name' => 'Indonesia', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'IR', 'name' => 'Irán', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'IQ', 'name' => 'Iraq', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'IE', 'name' => 'Irlanda', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'IS', 'name' => 'Islandia', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'IL', 'name' => 'Israel', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'IT', 'name' => 'Italia', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'JM', 'name' => 'Jamaica', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'JP', 'name' => 'Japón', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'JO', 'name' => 'Jordania', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'KZ', 'name' => 'Kazajstán', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'KE', 'name' => 'Kenia', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'KG', 'name' => 'Kirguistán', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'KI', 'name' => 'Kiribati', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'KW', 'name' => 'Kuwait', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'LA', 'name' => 'Laos', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'LS', 'name' => 'Lesotho', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'LV', 'name' => 'Letonia', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'LB', 'name' => 'Líbano', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'LR', 'name' => 'Liberia', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'LY', 'name' => 'Libia', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'LI', 'name' => 'Liechtenstein', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'LT', 'name' => 'Lituania', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'LU', 'name' => 'Luxemburgo', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'MO', 'name' => 'Macao', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'MK', 'name' => 'ARY Macedonia', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'MG', 'name' => 'Madagascar', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'MY', 'name' => 'Malasia', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'MW', 'name' => 'Malawi', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'MV', 'name' => 'Maldivas', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'ML', 'name' => 'Malí', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'MT', 'name' => 'Malta', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'FK', 'name' => 'Islas Malvinas', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'MP', 'name' => 'Islas Marianas del Norte', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'MA', 'name' => 'Marruecos', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'MH', 'name' => 'Islas Marshall', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'MQ', 'name' => 'Martinica', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'MU', 'name' => 'Mauricio', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'MR', 'name' => 'Mauritania', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'YT', 'name' => 'Mayotte', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'MX', 'name' => 'México', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'FM', 'name' => 'Micronesia', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'MD', 'name' => 'Moldavia', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'MC', 'name' => 'Mónaco', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'MN', 'name' => 'Mongolia', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'MS', 'name' => 'Montserrat', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'MZ', 'name' => 'Mozambique', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'MM', 'name' => 'Myanmar', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'NA', 'name' => 'Namibia', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'NR', 'name' => 'Nauru', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'NP', 'name' => 'Nepal', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'NI', 'name' => 'Nicaragua', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'NE', 'name' => 'Níger', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'NG', 'name' => 'Nigeria', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'NU', 'name' => 'Niue', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'NF', 'name' => 'Isla Norfolk', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'NO', 'name' => 'Noruega', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'NC', 'name' => 'Nueva Caledonia', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'NZ', 'name' => 'Nueva Zelanda', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'OM', 'name' => 'Omán', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'NL', 'name' => 'Países Bajos', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'PK', 'name' => 'Pakistán', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'PW', 'name' => 'Palau', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'PS', 'name' => 'Palestina', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'PA', 'name' => 'Panamá', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'PG', 'name' => 'Papúa Nueva Guinea', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'PY', 'name' => 'Paraguay', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'PE', 'name' => 'Perú', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'PN', 'name' => 'Islas Pitcairn', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'PF', 'name' => 'Polinesia Francesa', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'PL', 'name' => 'Polonia', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'PT', 'name' => 'Portugal', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'PR', 'name' => 'Puerto Rico', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'QA', 'name' => 'Qatar', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'GB', 'name' => 'Reino Unido', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'RE', 'name' => 'Reunión', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'RW', 'name' => 'Ruanda', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'RO', 'name' => 'Rumania', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'RU', 'name' => 'Rusia', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'EH', 'name' => 'Sahara Occidental', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'SB', 'name' => 'Islas Salomón', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'WS', 'name' => 'Samoa', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'AS', 'name' => 'Samoa Americana', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'KN', 'name' => 'San Cristóbal y Nevis', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'SM', 'name' => 'San Marino', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'PM', 'name' => 'San Pedro y Miquelón', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'VC', 'name' => 'San Vicente y las Granadinas', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'SH', 'name' => 'Santa Helena', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'LC', 'name' => 'Santa Lucía', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'ST', 'name' => 'Santo Tomé y Príncipe', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'SN', 'name' => 'Senegal', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'CS', 'name' => 'Serbia y Montenegro', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'SC', 'name' => 'Seychelles', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'SL', 'name' => 'Sierra Leona', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'SG', 'name' => 'Singapur', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'SY', 'name' => 'Siria', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'SO', 'name' => 'Somalia', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'LK', 'name' => 'Sri Lanka', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'SZ', 'name' => 'Suazilandia', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'ZA', 'name' => 'Sudáfrica', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'SD', 'name' => 'Sudán', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'SE', 'name' => 'Suecia', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'CH', 'name' => 'Suiza', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'SR', 'name' => 'Surinam', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'SJ', 'name' => 'Svalbard y Jan Mayen', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'TH', 'name' => 'Tailandia', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'TW', 'name' => 'Taiwán', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'TZ', 'name' => 'Tanzania', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'TJ', 'name' => 'Tayikistán', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'IO', 'name' => 'Territorio Británico del Océano Índico', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'TF', 'name' => 'Territorios Australes Franceses', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'TL', 'name' => 'Timor Oriental', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'TG', 'name' => 'Togo', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'TK', 'name' => 'Tokelau', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'TO', 'name' => 'Tonga', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'TT', 'name' => 'Trinidad y Tobago', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'TN', 'name' => 'Túnez', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'TC', 'name' => 'Islas Turcas y Caicos', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'TM', 'name' => 'Turkmenistán', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'TR', 'name' => 'Turquía', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'TV', 'name' => 'Tuvalu', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'UA', 'name' => 'Ucrania', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'UG', 'name' => 'Uganda', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'UY', 'name' => 'Uruguay', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'UZ', 'name' => 'Uzbekistán', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'VU', 'name' => 'Vanuatu', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'VE', 'name' => 'Venezuela', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'VN', 'name' => 'Vietnam', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'VG', 'name' => 'Islas Vírgenes Británicas', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'VI', 'name' => 'Islas Vírgenes de los Estados Unidos', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'WF', 'name' => 'Wallis y Futuna', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'YE', 'name' => 'Yemen', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'DJ', 'name' => 'Yibuti', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
            [ 'iso' => 'ZM', 'name' => 'Zambia', 'created_at' => $actual_date, 'updated_at' => $actual_date],
            [ 'iso' => 'ZW', 'name' => 'Zimbabue', 'created_at' => $actual_date, 'updated_at' => $actual_date ],
        ];

        DB::table('countries')->insert($countries);
    }
}
