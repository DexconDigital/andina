<?php

$nombre_inmobiliaria = "Andina Inmobiliaria";

//logo empresa
$logo_empresa = [
	$color =[
		"src" => "images/logo.png",
		"alt" => "Logo Andina Inmobiliaria"
	],
];

// boton pse
$pse = [
	"link" => "",
	"src" => "images/pse.jpg",
	"alt" => "Pagos PSE"
];

// redes sociales
$redes_sociales = [
	"facebook" => [
		"link" => "https://www.facebook.com/andinainmobiliariamed/",
		"icono" => "fab fa-facebook-f",
		"imagen" => "images/facebook.png"
	],
	// "twitter" => [
		// "link" => "https://twitter.com/inmobiliariagya",
		// "icono" => "fab fa-twitter",
		// "imagen" => "images/twitter.png"
	// ],
	"instagram" => [
		"link" => "https://www.instagram.com/andinainmobiliaria/",
		"icono" => "fab fa-instagram",
		"imagen" => "images/instagram.png"
	],
];

//datos de contacto 
$datos_contacto = [
		"direccion" => [
			"direccion" => "Carrera 81 No 32 – 204 Oficina 322A - Nueva Villa del Aburra – Medellín – Antioquia",
			"icono" => "fas fa-map-marker-alt",
		],
		"telefono_fijo" => [
			"link"=> "0344445232",
			"imprimir" => "+57 (4) 444 52 32",
			"icono" => "fas fa-phone-alt",
		],
		"celular" => [
			"link"=> "+573005430722",
			"imprimir" => "300 543 07 22",
			"icono" => "fas fa-mobile-alt",
		],
		"whatsapp" => [
			"link"=> "https://api.whatsapp.com/send?phone=573005430722&text=&source=&data=",
			"imprimir" => "300 543 07 22",
			"icono" => "fab fa-whatsapp",
		],
		"correo" => [
			"correo" => "info@andinainmobiliaria.com",
			"icono" => "far fa-envelope",
		],
		"horario" => [
			"horario" => "Lunes a Jueves de 7:30AM a 12:30PM y de 1:30PM a 5:30PM Viernes de 7:30AM a 12:00PM y de 2:00PM a 5:30PM Sábados de 8:00AM a 12:00PM.",
			"icono" => "fas fa-calendar-alt",
		],
];

//logos aliados
$logos_aliados = [
	0 => "images/libertador.png",
	1 => "images/simi.png",
	2 => "images/fenalco.png",
	3 => "images/ccm.png",
];

//imagenes slide home
$imagenes_slide_principal = [
	0 =>[
		'imagen' => 'images/slide_1.jpg',
		'alt' => 'Imagen carrusel principal'
	],
	1 => [
		'imagen' => 'images/slide_2.jpg',
		'alt' =>'Imagen carrusel principal'
	],
	2 => [
		'imagen' => 'images/slide_3.jpg',
		'alt' =>'Imagen carrusel principal'
	],
];

//textos quienes somos
$texto_quienes_somos = [
	"quienes_somos" => [
		"titulo" => "Quiénes Somos",//en negrita
		"parrafo" => "ANDINA INMOBILIARIA S.A.S. inicia con el propósito de ofrecer excelentes soluciones y servicios para el mercado inmobiliario, donde nuestro objetivo  primordial es brindar acompañamiento con responsabilidad y realizar una gestión de alta calidad con nuestros clientes en la promoción y venta de propiedad raíz,  arrendamiento de inmuebles y avalúos de toda clase de propiedades.",
		],	
	
	"mision" => [
		"titulo" => "Misión",//en negrita
		"parrafo" => "ANDINA INMOBILIARIA S.A.S. es una empresa dedicada a brindar acompañamiento y gestión de alta calidad en servicios inmobiliarios como promoción, venta de propiedad raíz, arrendamiento de inmuebles y avalúos, buscando satisfacer las necesidades de nuestros clientes y socios, apoyados en el compromiso y la gestión ética y profesional de nuestro equipo de trabajo.",
	],
	"vision" => [
		"titulo" => "Visión",//en negrita
		"parrafo" => "Ser cada día una inmobiliaria con mayor crecimiento y reconocimiento de nuestros clientes por la alta calidad, amabilidad y responsabilidad en la prestación de servicios inmobiliarios, brindando garantías, cumplimiento y acompañamiento en las decisiones de nuestros clientes a la hora de pensar en propiedad raíz.",
	],
	"valores" => [
		"titulo" => "Valores Corporativos",//en negrita
		"parrafos" => [
			0 => "Ética", 
			1 => "Respeto", 
			2 => "Honestidad",
			3 => "Compromiso",
			4 => "Comunicación",
			5 => "Responsabilidad",
			6 => "Trabajo en Equipo",
		], 
	],
];


// imaganes varias
$imagenes = [
	"servicios" => [
		'imagen' => 'images/banner_servicios.jpg',
		'alt' => 'Imagen'
	],
	"quienes_somos" => [
		'imagen' => 'images/banner_quienes_somos.jpg',
		'alt' => 'Imagen'
	],
	"inmuebles" => [
		'imagen' => 'images/banner_inmuebles.jpg',
		'alt' => 'Imagen'
	],
	"detalle" => [
		'imagen' => 'images/banner_detalle_inmueble.jpg',
		'alt' => 'Imagen'
	],
	// "blog" => [
		// 'imagen' => 'images/banner_blog.png',
		// 'alt' => 'Imagen'
	// ],
	"contacto" => [
		'imagen' => 'images/banner_contacto.jpg',
		'alt' => 'Imagen'
	],
];

//iconos servicios
$iconos_servicios = [
	"arrendamientos" => "fas fa-sign",
	"ventas" => "fas fa-tags",
	"avaluos" => "fas fa-balance-scale",
];
	
//textos servicios
$texto_servicios = [
	"arrendamientos" => [
		"titulo" => "Arrendamientos",
		"propietario" => [
			"titulo" => "Propietario",
			"parrafos" => [
				0 => "Promocionamos de manera ágil y efectiva su inmueble en diferentes portales inmobiliarios.",
				1 => "Estudio y análisis de los arrendatarios por medio de la aseguradora.",
				2 => "Garantía en el pago del canon de arrendamiento, así el arrendatario no cumpla con este.",
				3 => "Realización de un inventario escrito y fotográfico del inmueble, acompañado de un acta de entrega.",
				4 => "Apoyo con el pago de administración y servicios públicos, previa autorización del propietario.",
			],
		],
		"arrendatario" => [
			"titulo" => "Arrendatario",
			"parrafos" => [
				0 => "Acompañamiento en la búsqueda de su propiedad ideal.",
				1 => "Agilidad en la entrega de su propiedad.",
				2 => "Realización de un inventario escrito y fotográfico del inmueble, acompañado de un acta de entrega.",
				3 => "Contamos con asesores calificados y con toda la disposición de conocerlos y escuchar la necesidad de encontrar un hogar ideal.",
			],
		],	
	],	
	"ventas" =>[
		"titulo" => "Ventas",
		"parrafos" => [
			0 => "Nuestro equipo de trabajo le brindara el acompañamiento y la asesoría necesaria para la venta de su propiedad.",
			// viñetas
			1 => "Promocionamos su inmueble en los diferentes portales inmobiliarios.",
			2 => "Acompañamos y asesoramos las partes durante el proceso de negociación.",
			3 => "Revisamos y analizamos los certificados de libertad, escrituras y demás documentos que sean necesarios al inicio del proceso de venta.",
			4 => "Realizamos el documento Promesa de Compraventa.",
			5 => "Hacemos seguimiento y gestión a los documentos necesarios para la firma de la escritura pública de compraventa.",
			6 => "Realizamos la gestión de los paz y salvos de impuesto predial, valorización y administración.",
			7 => "Finalizamos nuestra gestión con el seguimiento y entrega de escrituras, finalizando así el proceso de venta.",
		],	
	],
	"avaluos" =>[
		"titulo" => "Avalúos",
		"parrafo" => "Ofrecemos a nuestros clientes el servicio de avalúos para todo tipo de propiedades, con el fin de determinar el valor correcto y real del mismo.",
	],
];
?>