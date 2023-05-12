<?php 

require_once('crud.php');

$is = new crud();

    $dados = ['nome' => [
        'Luiz','Felipe', 'Matheus', 'Mateus', 'Gabriel,', 'Alvaro', 'Quenedis', 'Tulio', 'João', 'Julio', 'Breno', 'Cassio', 'Pedro',
        'Higor', 'Gabriel', 'Ricardo', 'Bruno', 'Everaldo', 'Yuri', 'Carlos', 'Josue', 'Emanuel', 'Isais', 'Higor', 'Eryka', 'Lucas', 'Diogo', 'Suellen', 'Sabrina', 'Fernando', 'Pietro', 'Wellington',
        'Amanda', 'Aline', 'Lucimar', 'Lucineia', 'Maria'
    ],
    'sobrenome' => [
        'Felipe', 'Martins', 'Alves', 'Pereira', 'Alves', 'Breno','Oliveira',
        'Arantes', 'Marcos', 'Alves', 'Lopez', 'Nantes', 'Pedroso', 'Alves', 'Lima', 'Antonio', 'Martins', 'Eduardo', 'Alberto', 'Guimaraes', 'Alves',
        'Gonçalves', 'Lima', 'Alves', 'Gonçalves', 'Alves', 'Pereira', 'Lima',
        'Pereira', 'Gonçalves', 'Pereira', 'Costa', 'Martins', 'Alves', 'Divina','Alves', 'Antunes'
    ],
    'email' => [
        'luizfelipe098@icloud.com', 'felipe0189@gmail.com', 'matheus89@hotmail.com', 'mateuscacador21@gmail.com', 'gabriellima123@gmail.com', 'alvaroty42@gmail.com',
        'quenedis982@icloud.com', 'tulioarantes00@outlook.com', 'joãopedefeijao123@gmail.com', 'julioalves23@gmail.com', 'brenolop92@icloud.com', 'cassioalves21@gmail.com', 'pedrolisterine012@gmail.com', 'higoralvees23@gmail.com',
        'gabriellima098@hotmail.com', 'ricardoantonio092@gmail.com', 'brunommartins87@hotmail.com', 'everaraldo22@icloud.com', 'yurialberto23@gmail.com', 'carlosgui245@gmail.com', 'josuezinhoo35@hotmail.com', 'emanuells94@icloud.com', 'isaiasLima98@gmail.com', 'higuinho928@hotmail.com', 'erykagonçalves02@gmail.com', 'lucasalves24@gmail.com', 'diogoper23@gmail.com', 'suellenlima234@hotmail.com', 'sabrinaper903@gmail.com', 'fernandinhogonc240@gmail.com', 'pietrolagoas092@gmail.com', 'wellinghtoncost23@gmail.com', 
        'amandamarttiins455@hotmail.com', 'alinesinha24@gmail.com',
        'lucimaralv98@hotmail.com', 'lucineiaalvt098@gmail.com'
    ], 
    'senha' => [
        'Necromante2209!', 'Fluiz2209!', 'Laps123', '123456788', 'nudes123',
        'hgbatman24', 'scorpion123', 'gabrielLopes123', '1234', 'vitorramos1235', 'suador249', 'kenedis156', '00987214211', 'Ness1234', 'Gabrielzinhoff123',
        'ricardinho12345', 'bruninho123', 'senha1234', 'corinthiansfc33', '3knaotemjeito', 'Alica2451', '123456789-03', 'isaisa092', 'higorduarte21@gmail.com',
        'erykinha23', 'lucasalve245', 'Dignot24', 'suellenli298', 'killLimit213', 'Necromant241', 'birandograu123', 'welli24sxz',
        'amandina981', 'alinetruc245', 'LuciMara241', 'lucimar25qg'
    ],
    'telefone' =>[
        '(34) 99247-2620', '(34) 99164-0989', '(61) 98741-7861', '(11) 99164-0978', '(11) 99897-6134', '(34) 99210-8247','(62)99234-8871', '(68) 99690-5611',
        '(61) 99140-3266', '(64) 99244-1056', '(34) 99691-2034', '(64) 99147-2120',
        '(64) 99247-2210', '(61) 99141-8090', '(11) 99109-8741', '(34) 99245-4476', '(11) 99247-2620', '(61) 99834-5146', '(34) 99543-0091', '(81) 99997-6501', '(61) 99244-8177',
        '(34) 99997-9891', '(64) 99122-0192', '(64) 99195-7710', '(11) 99992-4726', '(34) 999091-6654', '(11) 99198-1102', '(64) 99234-0001',
        '(11) 99208-1011', '(64) 99912-0901', '(61) 99877-5512', '(11) 99433-7123', '(64) 99210-7888', '(64) 99164-8812', '(64) 99299-9120',
        '(34) 99144-7190'
    ]
    ];


    for ($i = 0; $i < count($dados['nome']); $i++){
        $is->inserirDados($dados['nome'][$i], $dados['sobrenome'][$i], 
        $dados['email'][$i], $dados['senha'][$i],$dados['telefone'][$i] );
    }

?>