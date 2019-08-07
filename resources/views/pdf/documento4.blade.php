@extends('layouts.pdf')

@section('content')


    <div class="container-fluid">
        <div>
            <div class="title">CONTRATO DE
                PRESTACIÓN DE SERVICIOS FUNERARIOS</div>
        </div>
        <div>
            <div class="title">INTEGRALES A
                FUTURO</div>
        </div>
        <div class="row">
            <div class="col-sm-4"><img src="logo prevision final_Mesa de trabajo 1.jpg" width="100%" height="80%"></div>
            <div class="col-sm-4"><p class="logoLinea">L&iacute;nea de Asistencia <br/>Inmediata <strong>5705.6000</strong></p></div>
            <div class="col-sm-4"><img></div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group row">
                    <label for="fecha" class="col-sm-2 col-form-label tableTitle">FECHA</label>
                    <div class="col-sm-10">
                        <input id="fecha">
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group row">
                    <label for="fecha" class="col-sm-2 col-form-label tableTitle">FOLIO</label>
                    <div class="col-sm-10">
                        <input id="fecha">
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group row">
                    <label for="fecha" class="col-sm-4 col-form-label tableTitle">CONTRATO No.</label>
                    <div class="col-sm-8">
                        <input id="fecha">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group row">
                    <label for="fecha" class="col-sm-2 col-form-label tableTitle" style="padding-left: 45%;"><sup>d&iacute;a/mes/a&ntilde;o</sup></label>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group row">
                    <label for="fecha" class="col-sm-2 col-form-label tableTitle">PLAN</label>
                    <div class="col-sm-10">
                        <input id="fecha">
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group row">
                    <label for="fecha" class="col-sm-4 col-form-label tableTitle">Producto/Servicio</label>
                    <div class="col-sm-8">
                        <input id="fecha">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <div class="form-group row">
                    <label for="fecha" class="col-sm-12 col-form-label tableTitle">DATOS DEL "EL CONSUMIDOR"</label>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group row">
                    <label for="fecha" class="col-sm-12 col-form-label"><sup style="padding-left: 100px;">*Contrato 100% transferible y sin
                            caducidad.</sup></label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <div class="form-group row">
                    <label for="fecha" class="col-sm-2 col-form-label labelInfo">NOMBRE</label>
                    <div class="col-sm-10">
                        <input id="fecha">
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group row">
                    <label for="fecha" class="col-sm-7 col-form-label labelInfo">FECHA DE NACIMIENTO</label>
                    <div class="col-sm-5">
                        <input id="fecha">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <div class="form-group row">
                    <label for="fecha" class="col-sm-12 col-form-label tableTitle">DATOS DEL "EL CONSUMIDOR"</label>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group row">
                    <label for="fecha" class="col-sm-12 col-form-label"><sup style="padding-left: 100px;">*Contrato 100% transferible y sin
                            caducidad.</sup></label>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group row">
                    <label for="fecha" class="col-sm-12 col-form-label"><sup style="padding-left: 100px;">*Contrato 100% transferible y sin
                            caducidad.</sup></label>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6"><sup>Apellido Paterno Apellido Materno
                    Nombre(s)</sup></div>
            <div class="col-sm-3"><label class="labelInfo">EDAD</label> <input></div>
            <div class="col-sm-3"><label class="labelInfo">SEXO</label> <input></div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="tableTitle">DOMICILIO</div>
        </div>
        <div class="row">
            <div><label class="labelInfo">CALLE</label> <input></div>
            <div><label class="labelInfo">NO.</label> <input></div>
            <div><label class="labelInfo">INTERIOR</label> <input></div>
            <div><label class="labelInfo">COL.</label> <input></div>
        </div>
        <div class="row">
            <div><label class="labelInfo">DEL./MPIO.</label> <input></div>
            <div><label class="labelInfo">CIUDAD</label> <input></div>
            <div><label class="labelInfo">ESTADO</label> <input></div>
        </div>
        <div class="row">
            <div><label class="labelInfo">C.P.</label> <input></div>
            <div><label class="labelInfo">TEL. CASA</label> <input></div>
            <div><label class="labelInfo">TEL. OFICINA</label> <input></div>
            <div><label class="labelInfo">TEL. CELULAR</label> <input></div>
        </div>
        <div class="row">
            <div><label class="labelInfo">RFC.</label> <input></div>
            <div><label class="labelInfo">CURP</label> <input></div>
            <div><label class="labelInfo">E-MAIL</label> <input></div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="tableTitle">DATOS DEL "EL TITULAR SUSTITUTO"</div>
        </div>
        <div class="row">
            <div><label class="labelInfo">NOMBRE</label> <input></div>
            <div><label class="labelInfo">FECHA DE NACIMIENTO</label> <input></div>
        </div>
        <div class="row">
            <div><sup>Apellido Paterno Apellido Materno
                    Nombre(s)</sup></div>
            <div><label class="labelInfo">EDAD</label> <input></div>
            <div><label class="labelInfo">SEXO</label> <input></div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="tableTitle">DOMICILIO</div>
        </div>
        <div class="row">
            <div><label class="labelInfo">CALLE</label> <input></div>
            <div><label class="labelInfo">NO.</label> <input></div>
            <div><label class="labelInfo">INTERIOR</label> <input></div>
            <div><label class="labelInfo">COL.</label> <input></div>
        </div>
        <div class="row">
            <div><label class="labelInfo">DEL./MPIO.</label> <input></div>
            <div><label class="labelInfo">CIUDAD</label> <input></div>
            <div><label class="labelInfo">ESTADO</label> <input></div>
        </div>
        <div class="row">
            <div><label class="labelInfo">C.P.</label> <input></div>
            <div><label class="labelInfo">TEL. CASA</label> <input></div>
            <div><label class="labelInfo">TEL. OFICINA</label> <input></div>
            <div><label class="labelInfo">TEL. CELULAR</label> <input></div>
        </div>
        <div class="row">
            <div><label class="labelInfo">RFC.</label> <input></div>
            <div><label class="labelInfo">CURP</label> <input></div>
        </div>
        <div class="row">
            <div><label class="labelInfo">E-MAIL</label> <input></div>
            <div><label class="labelInfo">FIRMA</label> <input></div>
        </div>
    </div>
    <div class="row" style="padding: 25px; page-break-before: always;">
        <div class="col-sm-6">
            <div class=" row">
                <p>
                    Contrato de prestación de Servicios Funerarios a Futuro, que celebran por una parte Previsión Final, S.A. de C.V., representada por Flor de María Citlal Solís Dávila, a quien en lo sucesivo se denominará “El Proveedor” y por la otra “El Consumidor”, cuyos datos aparecen en la Carátula del presente, al tenor de las siguientes declaraciones y cláusulas:

                    D E C L A R A C I O N E S
                    I.- Declara “El Proveedor”:
                    I.1. Ser una Empresa constituida mediante escritura número 17,850 del 13 de julio de 1981, ante la Fe del Lic. Eduardo Flores Castro Altamirano, Notario Número 33 del D.F., y estar inscrita en el Folio Mercantil 00041432 del Registro Público de la Propiedad y del Comercio de la Ciudad de México; y que contempla en su objeto social la prestación de servicios funerarios por sí o a través de terceros, y que cuenta con la infraestructura y el personal altamente calificado, además de amplia experiencia en el ramo funerario.
                    I.2. Que su Representante Legal acredita su personalidad mediante el testimonio notarial número ____, volumen ________ de fecha ____de ______ de _____, pasado ante la fe del Lic. _________________, Notario Público número ____, en ________; manifestando bajo protesta de decir verdad que dichas facultades no le han sido limitadas, revocadas ni modificadas en forma alguna.
                    I. 3. Estar inscrita en el Registro Federal de Contribuyentes con la clave PFI-810716-QEA y tener como domicilio en avenida Mina N° 5, Col. Ampliación Palo Solo, Municipio de Huixquilucan, Estado de México, C.P. 52778, correo electrónico servicioalcliente@previsionfinal.mx y teléfono 54819400.
                    I.4. Que el servicio funerario objeto del presente contrato será proporcionado por un tercero que es la empresa J. García López, S.A. de C.V.,(“La Agencia Funeraria”) a través de sus casas funerarias que se encuentran ubicadas en la Ciudad de México y área Conurbada y de acuerdo al Plan contratado. Dicha empresa cuenta con las instalaciones, equipo y personal calificado necesarios para dar cabal cumplimiento a lo previsto en el presente contrato.
                    En virtud de lo anterior, se responsabiliza directamente ante “El Consumidor” por los servicios que proporcionen “La Agencia Funeraria”. Asimismo, junto con “La Agencia Funeraria” responderán solidariamente frente a “El consumidor” del cumplimiento de los servicios, conforme a los términos y condiciones establecidos en el presente contrato.
                    I.4.1. Datos de localización de las instalaciones de la “Agencia Funeraria”: 
                    CASA PRIM. Domicilio en calle de General Prim número 57, Col. Juárez, Del. Cuauhtémoc, Ciudad de México. Tels. 5705-6000 y 5703-0228 y correo electrónico servicioalcliente@jgarcialopez.com.mx.
                    I.4.2. Domicilio de las casas funerarias:
                    CASA COYOACAN. Miguel Ángel de Quevedo No. 483, Col. Romero de Terreros, Del. Coyoacán, CP 04310, Ciudad de México.
                    CASA TLALPAN. Periférico Sur No. 4810, Col. Arenal de Guadalupe, Del. Tlalpan, CP 14389, Ciudad de México.
                    CASA OBSERVATORIO. Periférico No. 619, Col. Observatorio, Del. Miguel Hidalgo, CP 11860 Ciudad de México.
                    CASA SATÉLITE. Blvd. Manuel Ávila Camacho No. 725, Col. Santa María Nativitas, Naucalpan de Juárez, CP 33020, Estado de México.
                    CASA IZTAPALAPA. Calzada Ermita Iztapalapa No. 1143, Barrio San Lucas, Del. Iztapalapa, CP 09000 Ciudad de México.
                    *CASA PEDREGAL. San Jerónimo No. 140, Col. la Otra Banda, Del. Coyoacán, CP 04519, Ciudad de México.
                    *BOUTIQUE PRIM. General Prim No. 62, Col. Juárez, Del. Cuauhtémoc, CP 06600 Ciudad de México.
                    *CASA AEROPUERTO.
                    Oriente 172, No. 261, Col. Moctezuma Segunda Sección, Del. Venustiano Carranza, CP 15500, Ciudad de México.
                    *El servicio en estas casas así como cualquier otra que se llegue a abrir con posterioridad a la firma de este contrato, será incluido solo cuando esté expresamente señalado o convenido con “La Agencia Funeraria”.
                    I.4.3. Para efecto de lo señalado en el inciso I.4 y otorgar seguridad y certeza jurídica a los consumidores con fecha 01 de enero de 2016, celebró contrato de comisión mercantil con “La Agencia Funeraria”, a fin de que “El Proveedor pueda ofertar, vender y otorgar a sus clientes (consumidores) los servicios funerarios objeto del presente contrato.
                    El referido contrato de comisión mercantil se encuentra vigente y a disposición de “El Consumidor” en las instalaciones de “El Proveedor”.
                    I.4.4. Que “La Agencia Funeraria” es en términos de la NOM-036-SCFI-2016 una persona moral que cuenta con la infraestructura, los elementos propios, los recursos técnicos y humanos suficientes para dar cabal cumplimiento a los Servicios Funerarios materia de este Contrato. Y que cuenta además con las autorizaciones, licencias, permisos, avisos, manifestaciones previstas en las disposiciones legales, reglamentarias y normativas vigentes para llevar a cabo las actividades que comprenden los servicios funerarios.
                    I.4.5. Que “La Agencia Funeraria” cuenta con vehículos adecuados para la realización de traslados de cadáveres, autorizados de conformidad con las disposiciones aplicables.
                    I.4.6. Que “La Agencia Funeraria” cuenta con personal suficiente y calificado para el manejo de cadáveres y restos humanos.
                    I.4.7. Que “La Agencia Funeraria” cumple con las disposiciones establecidas en la NOM-036-SCFI-2016, “Prácticas comerciales, requisitos de información y disposiciones generales en la prestación de los servicios funerarios” y que cuenta con la aprobación y registro por parte de la Procuraduría Federal del Consumidor del modelo de contrato de adhesión para la prestación de servicios funerarios con los siguientes datos:
                    Contrato: _________________ No. de registro: _________________ Fecha: ______________________
                    I.4.8.Que los Servicios de cremación serán realizados en cualquiera de los crematorios de “La Agencia Funeraria”, que operan en las ubicaciones señaladas en el inciso I.4.2 que antecede, conforme a la disponibilidad. 
                    I.5. Al solicitar el servicio “El Proveedor” informará al “El Consumidor” sobre la disponibilidad de ataúdes especiales para ser cremados junto con el cadáver y restos humanos.
                    I.6. Que los Servicios de inhumación serán realizados en panteones autorizados que designe “El Consumidor” y se encuentren dentro de la Ciudad de México o la zona conurbada.
                    I.7. Que “El Proveedor” cuenta con las licencias, permisos, avisos y/o autorizaciones emitidas por las autoridades correspondientes para llevar a cabo sus actividades.
                    I.8. Que puso a disposición de “El Consumidor” un Catálogo Informativo sobre los bienes, servicios, planes de servicios y productos funerarios que se ofrecen, con información detallada de los bienes, servicios o productos que los integran y su costo final, así como de aquellos bienes, servicios o productos que “El Consumidor” puede adquirir de manera individual y el precio final de los mismos del cual eligió los descritos en la Carátula del presente Contrato. El catálogo se encuentra a disposición de “El Consumidor” en el domicilio de “El Proveedor” y en el sitio www.previsionfinal.mx. 
                    I.9. Que elaboró y puso a disposición de “El Consumidor” un presupuesto, con la descripción de los bienes, productos y servicios y el costo que se indica en la Carátula del presente contrato, al tenor del cual se prestará el servicio contratado.
                    I.10. Que en caso de haber promociones y paquetes de descuento al momento de la contratación, informará a “El consumidor” el detalle de las mismas, así como sus términos y condiciones.
                    II.- Declara “El Consumidor”:
                    II.1. En caso de Persona Moral: Es una persona moral con razón social ______________________, y estar legalmente constituida conforme a las leyes mexicanas, lo que se acredita con el testimonio de la escritura pública número _________, de fecha ________, otorgada ante la fe del (la) Lic. _________________ notario público número _______, en ____________, e inscrita en el Registro Público de Comercio de _________ bajo el número _______ de fecha _________, y que el ___________________ en su carácter de representante legal, en este acto interviene con las facultades que se le confieren en el testimonio de la escritura pública número _______, de fecha _________, otorgada ante la fe del (la) Lic._____________, notario público número _______ del _________, misma que se encuentra inscrita en el Registro Público de Comercio, bajo el número ______, y que dichas facultades no le han sido revocadas, modificadas o limitadas a la fecha de firma de este contrato.
                    II.1.En caso de Persona Física: Es una persona física, con capacidad legal y económica para obligarse en los términos del presente contrato y que sus datos son los que se asientan en la Carátula del presente.
                    II.2. Es su voluntad celebrar el presente contrato de prestación de servicios funerarios, a efecto de recibir de “El Proveedor” los referidos servicios y por lo tanto hará entrega del cuerpo del finado y del Certificado Médico de Defunción en original y dos copias con firma autógrafa del médico responsable, cuyo trámite y contenido es de su estricta responsabilidad y sin el cual “El Proveedor” no podrá iniciar la prestación de sus servicios.
                    II.3. Que es de su conocimiento el contenido del Catálogo Informativo de bienes, servicios, planes de servicios y productos que ofrece y  puso a su disposición “El Proveedor”, conforme al cual eligió el Plan y/ Servicios/Productos que se desglosan en la Carátula del presente contrato. Que así mismo conoce las instalaciones y servicios que “La Agencia Funeraria” ofrece, siendo su deseo celebrar este contrato. 
                    
                    En términos de lo declarado “Las Partes” se someten a las siguientes:
                    C L Á U S U LA S
                    Glosario
                    PRIMERA: Para los efectos de este Contrato, se entiende por:
                    Beneficiarios: A las personas físicas designadas por “El Consumidor”, que al fallecimiento de éste y del titular sustituto o en ausencia de ambos, adquieren los derechos, y asumen las obligaciones estipuladas en este contrato.
                    Consumidor: A la persona física o moral que contrata la prestación de servicios funerarios a futuro que son objeto del presente contrato.
                    Presupuesto: Documento expedido por “El Proveedor” previo a la realización del servicio, en el que se detallan los bienes y servicios que conforman el paquete de servicios funerarios solicitado por “El Consumidor”, así como el precio total del mismo y su forma de pago.
                    Proveedor: A la persona moral con razón social Previsión Final, S.A. DE C.V., que aparece en el rubro del contrato, que presta los servicios funerarios de uso a futuro que son objeto del presente contrato.
                    Servicios: Es el servicio funerario de uso a futuro, que ofrece “El Proveedor” y que  contrata “El Consumidor” de manera anticipada como previsión, el cual se prestará cuando ocurra la muerte del consumidor o de los usuarios designados por éste o por el Titular Sustituto consistente en el paquete de servicios establecido en el presente contrato.
                    Titular sustituto: Es la persona designada por “El Consumidor”, la cual deberá aceptar su designación para que en ausencia del consumidor o cuando éste se encuentre imposibilitado, disponga de los servicios contratados conforme a sus necesidades.
                    Usuario: Al consumidor o la(s) persona(s) designada(s) por éste, o en su caso por el titular sustituto, para que al fallecer les proporcionen los servicios funerarios objeto del presente Contrato.
                    Del Objeto:
                    SEGUNDA: Por virtud el presente Contrato “El Consumidor” adquiere el derecho a recibir la prestación de los Servicios Funerarios a futuro que se desglosan en la Carátula, y “El Proveedor”, se obliga, previo pago total del precio pactado, a otorgarlos por sí o a través de terceros.
                    Una vez pagado el precio pactado, “El Consumidor” o “El Titular Sustituto” tienen el derecho de disponer de los servicios contratados conforme a sus necesidades.
                    De los Términos y Condiciones.
                    TERCERA: Para la prestación de los Servicios Funerarios, “El Consumidor” o, en su caso El Titular Sustituto deberán entregar a “El Proveedor”, el Certificado Médico de Defunción, en original y dos tantos con firmas originales del médico certificante; así como cumplir los requisitos legales aplicables y comprobar que se ha cubierto el precio total de los servicios referidos en el presente contrato. Sí desean utilizar los servicios antes de que se terminen de cubrir los pagos establecidos en la Carátula del presente contrato, deberá pagar en su totalidad el importe de los servicios en una sola exhibición.
                    En caso de que el Certificado Médico de Defunción contenga errores de cualquier índole, será responsabilidad de “El Consumidor” llevar a cabo las acciones necesarias para su corrección y substitución.
                    En caso de muerte legal, es responsabilidad de “El Consumidor” obtener el No Inconveniente para Cremación o el Permiso para Inhumación haciendo las declaraciones y gestiones correspondientes ante el Ministerio Público.
                    “El Proveedor” no será responsable de la prestación de los servicios, ni estará obligado al pago de reembolso alguno en caso de no cumplirse los requisitos antes mencionados; por lo tanto todo servicio que “El Consumidor” o, el “Titular Sustituto” o los Beneficiarios o los familiares ordenen será por su exclusiva cuenta.
                    La Carátula forma parte integral de este contrato y en caso de inconsistencia se estará a lo previsto en las presentes cláusulas.
                    De los servicios:
                    CUARTA: “El Proveedor” se obliga a prestar los servicios a que se refiere el presente contrato y su Carátula, durante los 365 (trescientos sesenta y cinco) días del año, y durante las 24 (veinticuatro) horas del día, en la sala de velación de la casa funeraria que corresponda al plan o paquete contratado, o bien en el domicilio particular que “El Consumidor”, “El Titular Sustituto” o los “Beneficiarios” indiquen, dentro de la Ciudad de México y Área Conurbada.
                    “El Consumidor” o, “El Titular Sustituto” podrán solicitar servicios adicionales no incluidos en el plan o paquete de servicios funerarios contratado, en el momento en que se presten los Servicios Funerarios objeto del presente contrato. Los servicios adicionales correrán exclusivamente por cuenta de “El Consumidor” o “El Titular Sustituto” y se cubrirán al precio vigente que aparezca en el catálogo informativo de servicios, en el momento de solicitarlos.
                </p>
            </div>
        </div>
        <div class="col-sm-6" style="padding: 25px;">
            <div class="row">
                <p> “El Consumidor” autoriza a “El Proveedor” y/o a “La Agencia Funeraria” para que en su representación puedan realizar los trámites que requiera el servicio funerario ante las autoridades competentes.
                    Del Precio y las Formas de Pago:
                    QUINTA: El precio y forma de pago de los servicios objeto del presente contrato, se establece en Moneda Nacional y se describen la Carátula del mismo y “El Consumidor” se obliga a pagarlo a “El Proveedor” en términos pactados.
                    “El Proveedor” se obliga a prestar los servicios convenidos en el presente contrato únicamente cuando se haya cubierto el precio total pactado, al momento de solicitar el servicio.
                    El precio contempla todas las cantidades y conceptos referentes al Servicio y a lo señalado en su carátula; por lo que “El proveedor” se obliga a respetar en todo momento dicho costo sin poder cobrar otra cantidad no estipulada en el presente contrato, a menos de que exista consentimiento por escrito del consumidor de algún servicio adicional solicitado, que derive del objeto principal del contrato.
                    Forma y lugar de pago:
                    SEXTA: Queda convenido que todos los pagos que realice “El Consumidor” a “El Proveedor”, deberá realizarlos sin necesidad de requerimiento alguno, en el domicilio de “El Proveedor”, en efectivo y en moneda nacional, salvo que las partes acuerden o acepten otra forma distinta, como pudiese ser con cargo a tarjeta de crédito o débito, o bien a través de los Bancos Autorizados que previamente le indique este último.
                    En el supuesto de que el día de pago sea inhábil, “El Consumidor” podrá efectuar el pago, sin cargo alguno, al día hábil siguiente. “El Consumidor” podrá hacer pagos por adelantado o realizar el pago total del precio, sin penalización alguna.
                    “El Proveedor” extenderá a “El Consumidor” la factura, recibo o comprobante, en el que consten los datos específicos del servicio objeto del presente contrato, al momento en que este último se efectué la totalidad de los pagos convenidos en la Carátula del presente contrato y se presten los servicios.
                    De los Derechos del Consumidor
                    SÉPTIMA: “El Consumidor” tiene los siguientes derechos:
                    Recibir por escrito los costos, características y demás términos fijados para la prestación del servicio.
                    Recibir, a petición de parte, el catálogo informativo de los servicios funerarios que se presten, destacando las características y precios finales de los mismos, incluidos los impuestos.
                    Recibir un presupuesto escrito, vinculante y gratuito, en el que se establezca la vigencia del mismo, así como las características de los servicios y los precios de los mismos.
                    Recibir de manera satisfactoria y respetuosa los servicios funerarios contratados.
                    Designar titular sustituto y beneficiarios.
                    Solicitar la cancelación del servicio en los términos pactados en el presente contrato.
                    A exigir que la información proporcionada al proveedor sea tratada de conformidad con la Ley Federal de Protección de Datos Personales en Posesión de los Particulares.
                    De las obligaciones de “El Proveedor”
                    OCTAVA: “El Proveedor” tiene las siguientes obligaciones:
                    Contar con las instalaciones adecuadas para la prestación de los servicios funerarios ofrecidos.
                    Contar con las licencias, permisos, autorizaciones, avisos y demás documentación requerida para su funcionamiento legal.
                    Contar con vehículos adecuados para la realización de traslados de cadáveres, mismos que serán exclusivos para tal fin.
                    Contar con personal suficiente y calificado para el manejo de cadáveres y restos humanos.
                    Proporcionar a los consumidores el catálogo de productos y servicios.
                    Abstenerse de condicionar la prestación de servicios o venta de productos a la adquisición de paquetes.
                    Informar a “El consumidor” las restricciones aplicables en la comercialización del servicio materia del presente contrato, que en su caso correspondan.
                    Del Titular Sustituto y Beneficiarios:
                    NOVENA: “El Consumidor” designa como “Titular Sustituto” y como “Beneficiarios” a la(s) persona(s) señaladas en la Carátula del presente contrato. “El Titular Sustituto” está plenamente facultado para decidir sobre la utilización de los servicios funerarios contratados, cuando “El Consumidor” este imposibilitado para hacerlo. Haciendo mención que en cualquier momento el “El Consumidor” puede cambiar o modificar esta designación, en cuyo caso debe notificarlo por escrito a “El Proveedor” y anexar el escrito de aceptación del nuevo “Titular Sustituto”.
                    En caso de que “El Consumidor” no designe a un “Titular Sustituto”, se tendrá a lo dispuesto en la legislación aplicable.
                    El “Titular Sustituto” y los “Beneficiarios”, desde el momento de su designación y aceptación, están obligados a respetar los términos y condiciones contenidos en el presente Contrato, incluyendo el pago de mensualidades pendientes.
                    La designación de “Titular Sustituto” y “Beneficiarios” es un derecho de “El Consumidor” por lo que no podrá condicionarse su nombramiento al momento de la contratación. “El Consumidor” podrá designarlos con posterioridad mediante comunicación por escrito a “El Proveedor”.
                    De la Garantía 
                    DECIMA: “El Proveedor” garantiza que el servicio objeto del presente contrato se prestara conforme a lo estipulado en el mismo, en el domicilio de “La Agencia Funeraria” señalada en la Carátula del presente contrato. En caso de que “El Proveedor” no pueda prestar el servicio en la misma, éste deberá de otorgarle a “El Consumidor”, la prestación del servicio en otro establecimiento con las mismas características y condiciones del servicio contratado sin costo extraordinario por el traslado o por cualquier otro concepto para “El Consumidor”.
                    De la cancelación del saldo insoluto:
                    DECIMA PRIMERA: “El Proveedor” otorgará exclusivamente a “El Consumidor” la cancelación del saldo insoluto del precio pactado en caso de ocurrir su muerte por accidente. Este beneficio no cubre a los Titulares sustitutos o cesionarios, su vigencia será única y exclusivamente dentro de los 90 días siguientes a la firma del presente contrato.
                    Del Área establecida para los servicios:
                    DÉCIMA SEGUNDA: “El Proveedor” se obliga a prestar los servicios funerarios descritos en la Carátula del presente contrato, única y exclusivamente dentro de la Ciudad de México y área conurbada. Cuando el deceso de la persona que recibirá los servicios mencionados ocurra en el extranjero o en cualquier estado dentro de la República Mexicana, “El Consumidor” o sus familiares se encargarán de los trámites y traslado del cuerpo hacia la Ciudad de México, absorbiendo “El Consumidor” o sus familiares los gastos correspondientes.
                    De la Cesión de derechos:
                    DECIMA TERCERA: “El Consumidor”, podrá sin costo, ceder en cualquier tiempo los derechos sobre el presente Contrato, debiendo informar por escrito a “El Proveedor” el nombre, domicilio y teléfono del nuevo “Consumidor” y la exacta identificación del mismo, quien en todo caso asumirá las obligaciones de pago que se encuentren pendientes. 
                    La cesión de los derechos contenidos en el Contrato que en su caso realice “El Consumidor”, deja sin efectos las designaciones de “Titular Sustituto” y Beneficiarios que hubiera hecho, en consecuencia el nuevo “Consumidor” tendrá el derecho de designar nuevo “Titular Sustituto” y “Beneficiarios”, en caso que así lo desee. Para tal efecto se deberá observar lo establecido en la cláusula novena del presente contrato.
                    Del Incumplimiento por mora: 
                    DECIMA CUARTA: Sí “El Consumidor” no cumple con las obligaciones de pago en la caratula del presente contrato, se generaran intereses moratorios a favor de “El Proveedor” aplicando el interés mensual que resulte del Costo Porcentual Promedio (C.P.P.) que publica el Banco de México o la fórmula que la sustituya más tres puntos.
                    De la rescisión:
                    DÉCIMA QUINTA: Son causas de rescisión:
                    a) Que alguna de “Las partes” no cumpla con lo estipulado en el presente contrato.
                    b) Sí el Servicio prestado no corresponde con lo pactado y/o solicitado por “El Consumidor”.
                    Sí la rescisión es causada por el incumplimiento de las obligaciones de “El Consumidor”, “El Proveedor” podrá retener la pena convencional de aquellas cantidades entregadas por el “El Consumidor” a cuenta del precio. Las cantidades que resultaren excedentes a favor de “El Consumidor”, deberán ser devueltas por el “El Proveedor” entre los 15 días naturales siguientes a la fecha de la rescisión del contrato.
                    Sí el incumplimiento fuera a cargo de “El Proveedor”, además de la pena convencional señalada, restituirá a “El Consumidor” las cantidades pagadas por éste, obligándose “El Proveedor” a realizar tal restitución en el plazo establecido en el párrafo anterior.
                    Pena convencional:
                    DÉCIMA SEXTA: En caso de rescisión del presente Contrato, la parte que incumpla deberá pagar la pena convencional equivalente al 20% (veinte por ciento) del precio total del Servicio.
                    De la vigencia:
                    DÉCIMA SEPTIMA: Una vez pagado el precio establecido, el presente contrato tendrá vigencia hasta cumplir con los servicios convenidos.
                    De la Cancelación:
                    DÉCIMA OCTAVA: “El Consumidor” dentro de un plazo de 5 días hábiles, contados a partir del día hábil siguiente al de la firma de este contrato, podrá sin costo, cancelar mediante Aviso por escrito entregado personalmente o vía correo certificado en el domicilio de “El Proveedor”, la contratación de los servicios con derecho a que se le reintegren en su totalidad las cantidades por concepto de pago que haya realizado a la fecha, en un plazo no mayor a los 5 días hábiles siguientes a la fecha en que sea notificada a “El Proveedor” dicha cancelación. En caso de que la solicitud de cancelación esté fuera del plazo mencionado “El Proveedor” solicitará a “El Consumidor” ratifique su solicitud de cancelación y reintegrará las cantidades entregadas, menos el 20% del valor total de la operación por concepto de pena convencional, en un plazo no mayor a los 15 días naturales siguientes a la fecha en que sea notificada dicha cancelación.
                    
                    De la NO Responsabilidad de “El Proveedor”
                    DÉCIMA NOVENA: “El Proveedor” no se hace responsable, ni reintegrara cantidad alguna sí al fallecer “El Consumidor”, el “Titular Sustituto” o sus deudos, contratan los servicios de una Agencia Funeraria distinta por causa no imputable a “El Proveedor”; en todo caso subsiste la obligación por parte de “El Proveedor” contenida en el presente contrato, quien prestará el servicio funerario a cualquiera de los Titulares Sustitutos designados en la Carátula del presente contrato.
                    Caso Fortuito o Fuerza Mayor.
                    VIGESIMA: “El Proveedor” no será responsable de ningún retraso o falla en el cumplimiento de sus obligaciones, por caso fortuito o fuerza mayor, incluyendo, de manera enunciativa mas no limitativa: casos de guerra, terremotos, inundaciones, revueltas, bloqueos comerciales, o cualquier contingencia dentro o fuera de los Estados Unidos Mexicanos, que impidieran u obstaculizaran el cumplimiento de cualquiera de las obligaciones que se asumen conforme a este contrato, mismas que deben ser debidamente comprobadas por “El Proveedor”.
                    Catálogo de servicios:
                    VIGESIMA PRIMERA: “El Proveedor” pone a disposición de “El Consumidor” un catálogo en el que se describen los paquetes de los servicios funerarios que se ofrecen, el precio de los mismos y el detalle de los bienes y servicios que los integran. Los bienes y/o servicios que pueden contratarse sin necesidad de adquirir un paquete y los precios correspondientes, así como la información de que el servicio funerario, será prestado por un tercero, como se establece en las declaraciones de “El Proveedor” en el presente contrato.
                    Procedimiento para la atención de solicitudes de aclaración, quejas y reclamaciones:
                    VIGÉSIMA SEGUNDA: “El Consumidor” podrá presentar solicitudes de aclaración o interponer quejas o reclamaciones acudiendo al domicilio de “El proveedor” o por vía telefónica, los datos del domicilio y teléfono se encuentra en la Carátula del presente contrato. La queja o reclamación, tendrá que ser presentada mediante escrito libre, contra acuse de recibo en el domicilio de “El Proveedor”. Dicho escrito deberá contener el número de contrato, nombre de “El Consumidor” y una relación sucinta de los hechos materia de la queja o reclamación. “El Proveedor” deberá atender la queja o reclamación en un lapso no mayo de 48 (cuarenta y ocho) horas contadas a partir de recibida.
                    Aviso de privacidad:
                    VIGESIMA TERCERA: Previo a la firma del presente Contrato y en cumplimiento a lo dispuesto en la Ley Federal de Protección de Datos Personales en Posesión de los Particulares, “El Proveedor” hizo del conocimiento a “El Consumidor” el aviso de privacidad, así como del procedimiento para ejercer los derechos de acceso, rectificación, cancelación y oposición al tratamiento de sus datos personales en adelante, derechos ARCO.
                    Jurisdicción:
                    VIGÉSIMA CUARTA: La Procuraduría Federal del Consumidor es competente en la vía administrativa para resolver cualquier controversia que suscite sobre la interpretación o cumplimiento del presente contrato. Sin perjuicio de lo anterior las partes se someten a la jurisdicción y competencia de los Tribunales competentes de la Ciudad de México, renunciando expresamente a cualquier otra jurisdicción que pudiera corresponderles, por razón de sus domicilios presentes o futuros o por cualquiera otra razón.
                    Leído que fue por las partes el contenido del presente contrato, y una vez hecha la explicación de su contenido y alcance legal, lo firman por duplicado en la Ciudad de México, a los ___ días del mes de _______ del año 20____, entregándole a “El Consumidor” un ejemplar del mismo.
                </p>
            </div>
        </div>
    </div>

    <div class="row" style="padding: 25px; text-align: center;">
        <div class="col-sm-12">
            <div class="row">
                <p>Autorización para la utilización de información con fines mercadotécnicos o publicitarios:
                        “El Consumidor” SI ( ) No ( ) acepta que “El Proveedor” ceda o transmita a terceros, con fines mercadotécnicos o publicitarios, la información proporcionada por él con motivo del presente Contrato y si ( ) no ( ) acepta que “El Proveedor” le envíe publicidad sobre bienes y servicios.</p>
            </div>
        </div>
    </div>

    <div class="row" style="padding: 25px; text-align: center;">
            <div class="col-sm-12">
                <div class="row">
                    <p> “EL CONSUMIDOR”					 “EL PROVEEDOR” 

                            Este contrato fue aprobado y registrado por la Procuraduría Federal del Consumidor bajo el número ___________ de fecha ______ de _________ 2018. Cualquier variación del presente contrato en perjuicio de EL CONSUMIDOR, frente al contrato de adhesión registrado se tendrá por no puesta.
                            </p>
                </div>
            </div>
        </div>


@endsection


@section('footer')
@endsection

