# ProyectoPaginaWeb-02.github.io

Página web creada con:
- **HTML:** permite crear la estructura del sitio web mediante etiquetas
- **SASS:** herramienta que permite generar, de manera automática, hojas de estilo, añadiéndoles características que no tiene CSS como variables, funciones, selectores anidados, herencia,
- **JavaScript:** añade características que permite establecer acciones interactivas al sitio web
- **PHP:** favorece la conexión entre los servidores y la interfaz de usuario

Este sitio web fue creado y desarrollado usando la plataforma **NetBeans 10.0.** Además está adaptado para ejecutarse en dispositivos móviles.

El archivo **index.html** es el que contiene la página de inicio, la página principal del sitio web.

La página de inicio o principal consta de varias secciones: 
- **Un encabezado:** donde se muestra el logotipo de la organización
- **Una sección principal:** que contiene un mensaje, el menú principal, una sección adaptada para mostrar un enunciado especial, un carrusel de imagenes 
- **Un pie de página:** que muestra la información de la organización

El menú principal consta de cuatro opciones: 
- **Quienes somos:** muestra información acerca de la organización. Integra un submenú con 6 opciones adicionales, las cuales describen aspectos tales como la visión, la misión, los valores, entre otros, de la organización
- **Reflexiones:** muestra una página dedicada a publicar artículos, noticias, mensajes y/o reflexiones bíblicas
- **Actividades:** muestra las actividades que va a realizar la organización durante el mes en curso; así como actividades que se van a realizar a corto plazo 
- **Contáctenos:** consta de dos secciones: un formulario de contacto para que la persona puede ponerse en contacto con la organización y un mapa que muestra la ubicación junto con datos adicionales de contacto

En cada archivo de estilos css se utiliza la técnica de rejilla CSS Grid Layout para organizar de manera más eficiente cada elemento de la interfaz del sitio web, el cual los acomoda tanto a lo largo como a lo ancho de la ventana del navegador. Además, es complementado con flexbox, el cual ayudar a distribuir el espacio entre los ítems de la interfaz y mejora las capacidades de alineación de cada elemento.

Para el formulario de contacto se programaron validaciones tanto del lado cliente realizado con JavaScript; así como del lado del servidor programado con PHP

Para enviar la información del usuario a través del formulario de contacto se utiliza una clase llamada **PHPMailer**. PHPMailer es una clase php para enviar emails basada en el componente active server ASPMail. Permite de una forma sencilla tareas complejas como por ejemplo:
- Enviar mensajes de correo con ficheros adjuntos (attachments) 
- Enviar mensajes de correo en formato HTML 
- Enviar emails via sendmail, PHP mail(), o con SMTP.

A continuación se presentan algunas imágenes del sitio web brevemente descrito anteriormente:

![01  PaginaInicio_1](https://user-images.githubusercontent.com/98922137/164998874-1692a457-f1f9-46e5-9af8-c8762f0b8207.png)

![02  PaginaInicio_2](https://user-images.githubusercontent.com/98922137/164997755-101a21b3-36f3-4848-9382-9c851cba8b17.png)

![03  PaginaInicio_3](https://user-images.githubusercontent.com/98922137/164997769-cd75a55d-7f04-4fb7-a152-fc3025e01839.png)

![04  Nuestra visión_1](https://user-images.githubusercontent.com/98922137/164998391-41f59ddd-e6bd-41ba-a863-2fbbca5ad4a7.jpg)

![07  Nuestro perfil_1](https://user-images.githubusercontent.com/98922137/164998421-9481040a-438d-44ee-8ab2-b9c1f91cf297.jpg)

![11  Reflexión_1](https://user-images.githubusercontent.com/98922137/164998465-378cd382-ecce-4a36-a68b-feef528fde08.jpg)

![14  Actividades_1](https://user-images.githubusercontent.com/98922137/164998476-043cef6d-9095-4da6-a09b-c6af19943869.jpg)

![16  Actividades_3](https://user-images.githubusercontent.com/98922137/164998492-e71bb858-265f-44fe-9429-626b5bbaa10d.jpg)

![19  Contacto_3](https://user-images.githubusercontent.com/98922137/164998535-03d1c28f-e5a4-4236-b184-de68fc8abf18.jpg)

![20  Contacto_4](https://user-images.githubusercontent.com/98922137/164998542-a245b720-8c61-476a-b7b7-3fcf56ea07b3.jpg)

![22  Contacto_6](https://user-images.githubusercontent.com/98922137/164999625-f4af93ea-d79d-4637-a99f-124364960248.png)


