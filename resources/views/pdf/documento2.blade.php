@extends('layouts.pdf')

@section('content')


    <div class="container-fluid">
        <div>
            <div class="title">CONTRATO DE
                PRESTACI�N DE SERVICIOS FUNERARIOS</div>
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
                    Contrato de prestaci�n de Servicios Funerarios a Futuro, que celebran por una parte Previsi�n Final, S.A. de C.V., representada por Flor de Mar�a Citlal Sol�s D�vila, a quien en lo sucesivo se denominar� �El Proveedor� y por la otra �El Consumidor�, cuyos datos aparecen en la Car�tula del presente, al tenor de las siguientes declaraciones y cl�usulas:

                    D E C L A R A C I O N E S
                    I.- Declara �El Proveedor�:
                    I.1. Ser una Empresa constituida mediante escritura n�mero 17,850 del 13 de julio de 1981, ante la Fe del Lic. Eduardo Flores Castro Altamirano, Notario N�mero 33 del D.F., y estar inscrita en el Folio Mercantil 00041432 del Registro P�blico de la Propiedad y del Comercio de la Ciudad de M�xico; y que contempla en su objeto social la prestaci�n de servicios funerarios por s� o a trav�s de terceros, y que cuenta con la infraestructura y el personal altamente calificado, adem�s de amplia experiencia en el ramo funerario.
                    I.2. Que su Representante Legal acredita su personalidad mediante el testimonio notarial n�mero ____, volumen ________ de fecha ____de ______ de _____, pasado ante la fe del Lic. _________________, Notario P�blico n�mero ____, en ________; manifestando bajo protesta de decir verdad que dichas facultades no le han sido limitadas, revocadas ni modificadas en forma alguna.
                    I. 3. Estar inscrita en el Registro Federal de Contribuyentes con la clave PFI-810716-QEA y tener como domicilio en avenida Mina N� 5, Col. Ampliaci�n Palo Solo, Municipio de Huixquilucan, Estado de M�xico, C.P. 52778, correo electr�nico servicioalcliente@previsionfinal.mx y tel�fono 54819400.
                    I.4. Que el servicio funerario objeto del presente contrato ser� proporcionado por un tercero que es la empresa J. Garc�a L�pez, S.A. de C.V.,(�La Agencia Funeraria�) a trav�s de sus casas funerarias que se encuentran ubicadas en la Ciudad de M�xico y �rea Conurbada y de acuerdo al Plan contratado. Dicha empresa cuenta con las instalaciones, equipo y personal calificado necesarios para dar cabal cumplimiento a lo previsto en el presente contrato.
                    En virtud de lo anterior, se responsabiliza directamente ante �El Consumidor� por los servicios que proporcionen �La Agencia Funeraria�. Asimismo, junto con �La Agencia Funeraria� responder�n solidariamente frente a �El consumidor� del cumplimiento de los servicios, conforme a los t�rminos y condiciones establecidos en el presente contrato.
                    I.4.1. Datos de localizaci�n de las instalaciones de la �Agencia Funeraria�: 
                    CASA PRIM. Domicilio en calle de General Prim n�mero 57, Col. Ju�rez, Del. Cuauht�moc, Ciudad de M�xico. Tels. 5705-6000 y 5703-0228 y correo electr�nico servicioalcliente@jgarcialopez.com.mx.
                    I.4.2. Domicilio de las casas funerarias:
                    CASA COYOACAN. Miguel �ngel de Quevedo No. 483, Col. Romero de Terreros, Del. Coyoac�n, CP 04310, Ciudad de M�xico.
                    CASA TLALPAN. Perif�rico Sur No. 4810, Col. Arenal de Guadalupe, Del. Tlalpan, CP 14389, Ciudad de M�xico.
                    CASA OBSERVATORIO. Perif�rico No. 619, Col. Observatorio, Del. Miguel Hidalgo, CP 11860 Ciudad de M�xico.
                    CASA SAT�LITE. Blvd. Manuel �vila Camacho No. 725, Col. Santa Mar�a Nativitas, Naucalpan de Ju�rez, CP 33020, Estado de M�xico.
                    CASA IZTAPALAPA. Calzada Ermita Iztapalapa No. 1143, Barrio San Lucas, Del. Iztapalapa, CP 09000 Ciudad de M�xico.
                    *CASA PEDREGAL. San Jer�nimo No. 140, Col. la Otra Banda, Del. Coyoac�n, CP 04519, Ciudad de M�xico.
                    *BOUTIQUE PRIM. General Prim No. 62, Col. Ju�rez, Del. Cuauht�moc, CP 06600 Ciudad de M�xico.
                    *CASA AEROPUERTO.
                    Oriente 172, No. 261, Col. Moctezuma Segunda Secci�n, Del. Venustiano Carranza, CP 15500, Ciudad de M�xico.
                    *El servicio en estas casas as� como cualquier otra que se llegue a abrir con posterioridad a la firma de este contrato, ser� incluido solo cuando est� expresamente se�alado o convenido con �La Agencia Funeraria�.
                    I.4.3. Para efecto de lo se�alado en el inciso I.4 y otorgar seguridad y certeza jur�dica a los consumidores con fecha 01 de enero de 2016, celebr� contrato de comisi�n mercantil con �La Agencia Funeraria�, a fin de que �El Proveedor pueda ofertar, vender y otorgar a sus clientes (consumidores) los servicios funerarios objeto del presente contrato.
                    El referido contrato de comisi�n mercantil se encuentra vigente y a disposici�n de �El Consumidor� en las instalaciones de �El Proveedor�.
                    I.4.4. Que �La Agencia Funeraria� es en t�rminos de la NOM-036-SCFI-2016 una persona moral que cuenta con la infraestructura, los elementos propios, los recursos t�cnicos y humanos suficientes para dar cabal cumplimiento a los Servicios Funerarios materia de este Contrato. Y que cuenta adem�s con las autorizaciones, licencias, permisos, avisos, manifestaciones previstas en las disposiciones legales, reglamentarias y normativas vigentes para llevar a cabo las actividades que comprenden los servicios funerarios.
                    I.4.5. Que �La Agencia Funeraria� cuenta con veh�culos adecuados para la realizaci�n de traslados de cad�veres, autorizados de conformidad con las disposiciones aplicables.
                    I.4.6. Que �La Agencia Funeraria� cuenta con personal suficiente y calificado para el manejo de cad�veres y restos humanos.
                    I.4.7. Que �La Agencia Funeraria� cumple con las disposiciones establecidas en la NOM-036-SCFI-2016, �Pr�cticas comerciales, requisitos de informaci�n y disposiciones generales en la prestaci�n de los servicios funerarios� y que cuenta con la aprobaci�n y registro por parte de la Procuradur�a Federal del Consumidor del modelo de contrato de adhesi�n para la prestaci�n de servicios funerarios con los siguientes datos:
                    Contrato: _________________ No. de registro: _________________ Fecha: ______________________
                    I.4.8.Que los Servicios de cremaci�n ser�n realizados en cualquiera de los crematorios de �La Agencia Funeraria�, que operan en las ubicaciones se�aladas en el inciso I.4.2 que antecede, conforme a la disponibilidad. 
                    I.5. Al solicitar el servicio �El Proveedor� informar� al �El Consumidor� sobre la disponibilidad de ata�des especiales para ser cremados junto con el cad�ver y restos humanos.
                    I.6. Que los Servicios de inhumaci�n ser�n realizados en panteones autorizados que designe �El Consumidor� y se encuentren dentro de la Ciudad de M�xico o la zona conurbada.
                    I.7. Que �El Proveedor� cuenta con las licencias, permisos, avisos y/o autorizaciones emitidas por las autoridades correspondientes para llevar a cabo sus actividades.
                    I.8. Que puso a disposici�n de �El Consumidor� un Cat�logo Informativo sobre los bienes, servicios, planes de servicios y productos funerarios que se ofrecen, con informaci�n detallada de los bienes, servicios o productos que los integran y su costo final, as� como de aquellos bienes, servicios o productos que �El Consumidor� puede adquirir de manera individual y el precio final de los mismos del cual eligi� los descritos en la Car�tula del presente Contrato. El cat�logo se encuentra a disposici�n de �El Consumidor� en el domicilio de �El Proveedor� y en el sitio www.previsionfinal.mx. 
                    I.9. Que elabor� y puso a disposici�n de �El Consumidor� un presupuesto, con la descripci�n de los bienes, productos y servicios y el costo que se indica en la Car�tula del presente contrato, al tenor del cual se prestar� el servicio contratado.
                    I.10. Que en caso de haber promociones y paquetes de descuento al momento de la contrataci�n, informar� a �El consumidor� el detalle de las mismas, as� como sus t�rminos y condiciones.
                    II.- Declara �El Consumidor�:
                    II.1. En caso de Persona Moral: Es una persona moral con raz�n social ______________________, y estar legalmente constituida conforme a las leyes mexicanas, lo que se acredita con el testimonio de la escritura p�blica n�mero _________, de fecha ________, otorgada ante la fe del (la) Lic. _________________ notario p�blico n�mero _______, en ____________, e inscrita en el Registro P�blico de Comercio de _________ bajo el n�mero _______ de fecha _________, y que el ___________________ en su car�cter de representante legal, en este acto interviene con las facultades que se le confieren en el testimonio de la escritura p�blica n�mero _______, de fecha _________, otorgada ante la fe del (la) Lic._____________, notario p�blico n�mero _______ del _________, misma que se encuentra inscrita en el Registro P�blico de Comercio, bajo el n�mero ______, y que dichas facultades no le han sido revocadas, modificadas o limitadas a la fecha de firma de este contrato.
                    II.1.En caso de Persona F�sica: Es una persona f�sica, con capacidad legal y econ�mica para obligarse en los t�rminos del presente contrato y que sus datos son los que se asientan en la Car�tula del presente.
                    II.2. Es su voluntad celebrar el presente contrato de prestaci�n de servicios funerarios, a efecto de recibir de �El Proveedor� los referidos servicios y por lo tanto har� entrega del cuerpo del finado y del Certificado M�dico de Defunci�n en original y dos copias con firma aut�grafa del m�dico responsable, cuyo tr�mite y contenido es de su estricta responsabilidad y sin el cual �El Proveedor� no podr� iniciar la prestaci�n de sus servicios.
                    II.3. Que es de su conocimiento el contenido del Cat�logo Informativo de bienes, servicios, planes de servicios y productos que ofrece y  puso a su disposici�n �El Proveedor�, conforme al cual eligi� el Plan y/ Servicios/Productos que se desglosan en la Car�tula del presente contrato. Que as� mismo conoce las instalaciones y servicios que �La Agencia Funeraria� ofrece, siendo su deseo celebrar este contrato. 
                    
                    En t�rminos de lo declarado �Las Partes� se someten a las siguientes:
                    C L � U S U LA S
                    Glosario
                    PRIMERA: Para los efectos de este Contrato, se entiende por:
                    Beneficiarios: A las personas f�sicas designadas por �El Consumidor�, que al fallecimiento de �ste y del titular sustituto o en ausencia de ambos, adquieren los derechos, y asumen las obligaciones estipuladas en este contrato.
                    Consumidor: A la persona f�sica o moral que contrata la prestaci�n de servicios funerarios a futuro que son objeto del presente contrato.
                    Presupuesto: Documento expedido por �El Proveedor� previo a la realizaci�n del servicio, en el que se detallan los bienes y servicios que conforman el paquete de servicios funerarios solicitado por �El Consumidor�, as� como el precio total del mismo y su forma de pago.
                    Proveedor: A la persona moral con raz�n social Previsi�n Final, S.A. DE C.V., que aparece en el rubro del contrato, que presta los servicios funerarios de uso a futuro que son objeto del presente contrato.
                    Servicios: Es el servicio funerario de uso a futuro, que ofrece �El Proveedor� y que  contrata �El Consumidor� de manera anticipada como previsi�n, el cual se prestar� cuando ocurra la muerte del consumidor o de los usuarios designados por �ste o por el Titular Sustituto consistente en el paquete de servicios establecido en el presente contrato.
                    Titular sustituto: Es la persona designada por �El Consumidor�, la cual deber� aceptar su designaci�n para que en ausencia del consumidor o cuando �ste se encuentre imposibilitado, disponga de los servicios contratados conforme a sus necesidades.
                    Usuario: Al consumidor o la(s) persona(s) designada(s) por �ste, o en su caso por el titular sustituto, para que al fallecer les proporcionen los servicios funerarios objeto del presente Contrato.
                    Del Objeto:
                    SEGUNDA: Por virtud el presente Contrato �El Consumidor� adquiere el derecho a recibir la prestaci�n de los Servicios Funerarios a futuro que se desglosan en la Car�tula, y �El Proveedor�, se obliga, previo pago total del precio pactado, a otorgarlos por s� o a trav�s de terceros.
                    Una vez pagado el precio pactado, �El Consumidor� o �El Titular Sustituto� tienen el derecho de disponer de los servicios contratados conforme a sus necesidades.
                    De los T�rminos y Condiciones.
                    TERCERA: Para la prestaci�n de los Servicios Funerarios, �El Consumidor� o, en su caso El Titular Sustituto deber�n entregar a �El Proveedor�, el Certificado M�dico de Defunci�n, en original y dos tantos con firmas originales del m�dico certificante; as� como cumplir los requisitos legales aplicables y comprobar que se ha cubierto el precio total de los servicios referidos en el presente contrato. S� desean utilizar los servicios antes de que se terminen de cubrir los pagos establecidos en la Car�tula del presente contrato, deber� pagar en su totalidad el importe de los servicios en una sola exhibici�n.
                    En caso de que el Certificado M�dico de Defunci�n contenga errores de cualquier �ndole, ser� responsabilidad de �El Consumidor� llevar a cabo las acciones necesarias para su correcci�n y substituci�n.
                    En caso de muerte legal, es responsabilidad de �El Consumidor� obtener el No Inconveniente para Cremaci�n o el Permiso para Inhumaci�n haciendo las declaraciones y gestiones correspondientes ante el Ministerio P�blico.
                    �El Proveedor� no ser� responsable de la prestaci�n de los servicios, ni estar� obligado al pago de reembolso alguno en caso de no cumplirse los requisitos antes mencionados; por lo tanto todo servicio que �El Consumidor� o, el �Titular Sustituto� o los Beneficiarios o los familiares ordenen ser� por su exclusiva cuenta.
                    La Car�tula forma parte integral de este contrato y en caso de inconsistencia se estar� a lo previsto en las presentes cl�usulas.
                    De los servicios:
                    CUARTA: �El Proveedor� se obliga a prestar los servicios a que se refiere el presente contrato y su Car�tula, durante los 365 (trescientos sesenta y cinco) d�as del a�o, y durante las 24 (veinticuatro) horas del d�a, en la sala de velaci�n de la casa funeraria que corresponda al plan o paquete contratado, o bien en el domicilio particular que �El Consumidor�, �El Titular Sustituto� o los �Beneficiarios� indiquen, dentro de la Ciudad de M�xico y �rea Conurbada.
                    �El Consumidor� o, �El Titular Sustituto� podr�n solicitar servicios adicionales no incluidos en el plan o paquete de servicios funerarios contratado, en el momento en que se presten los Servicios Funerarios objeto del presente contrato. Los servicios adicionales correr�n exclusivamente por cuenta de �El Consumidor� o �El Titular Sustituto� y se cubrir�n al precio vigente que aparezca en el cat�logo informativo de servicios, en el momento de solicitarlos.
                </p>
            </div>
        </div>
        <div class="col-sm-6" style="padding: 25px;">
            <div class="row">
                <p> �El Consumidor� autoriza a �El Proveedor� y/o a �La Agencia Funeraria� para que en su representaci�n puedan realizar los tr�mites que requiera el servicio funerario ante las autoridades competentes.
                    Del Precio y las Formas de Pago:
                    QUINTA: El precio y forma de pago de los servicios objeto del presente contrato, se establece en Moneda Nacional y se describen la Car�tula del mismo y �El Consumidor� se obliga a pagarlo a �El Proveedor� en t�rminos pactados.
                    �El Proveedor� se obliga a prestar los servicios convenidos en el presente contrato �nicamente cuando se haya cubierto el precio total pactado, al momento de solicitar el servicio.
                    El precio contempla todas las cantidades y conceptos referentes al Servicio y a lo se�alado en su car�tula; por lo que �El proveedor� se obliga a respetar en todo momento dicho costo sin poder cobrar otra cantidad no estipulada en el presente contrato, a menos de que exista consentimiento por escrito del consumidor de alg�n servicio adicional solicitado, que derive del objeto principal del contrato.
                    Forma y lugar de pago:
                    SEXTA: Queda convenido que todos los pagos que realice �El Consumidor� a �El Proveedor�, deber� realizarlos sin necesidad de requerimiento alguno, en el domicilio de �El Proveedor�, en efectivo y en moneda nacional, salvo que las partes acuerden o acepten otra forma distinta, como pudiese ser con cargo a tarjeta de cr�dito o d�bito, o bien a trav�s de los Bancos Autorizados que previamente le indique este �ltimo.
                    En el supuesto de que el d�a de pago sea inh�bil, �El Consumidor� podr� efectuar el pago, sin cargo alguno, al d�a h�bil siguiente. �El Consumidor� podr� hacer pagos por adelantado o realizar el pago total del precio, sin penalizaci�n alguna.
                    �El Proveedor� extender� a �El Consumidor� la factura, recibo o comprobante, en el que consten los datos espec�ficos del servicio objeto del presente contrato, al momento en que este �ltimo se efectu� la totalidad de los pagos convenidos en la Car�tula del presente contrato y se presten los servicios.
                    De los Derechos del Consumidor
                    S�PTIMA: �El Consumidor� tiene los siguientes derechos:
                    Recibir por escrito los costos, caracter�sticas y dem�s t�rminos fijados para la prestaci�n del servicio.
                    Recibir, a petici�n de parte, el cat�logo informativo de los servicios funerarios que se presten, destacando las caracter�sticas y precios finales de los mismos, incluidos los impuestos.
                    Recibir un presupuesto escrito, vinculante y gratuito, en el que se establezca la vigencia del mismo, as� como las caracter�sticas de los servicios y los precios de los mismos.
                    Recibir de manera satisfactoria y respetuosa los servicios funerarios contratados.
                    Designar titular sustituto y beneficiarios.
                    Solicitar la cancelaci�n del servicio en los t�rminos pactados en el presente contrato.
                    A exigir que la informaci�n proporcionada al proveedor sea tratada de conformidad con la Ley Federal de Protecci�n de Datos Personales en Posesi�n de los Particulares.
                    De las obligaciones de �El Proveedor�
                    OCTAVA: �El Proveedor� tiene las siguientes obligaciones:
                    Contar con las instalaciones adecuadas para la prestaci�n de los servicios funerarios ofrecidos.
                    Contar con las licencias, permisos, autorizaciones, avisos y dem�s documentaci�n requerida para su funcionamiento legal.
                    Contar con veh�culos adecuados para la realizaci�n de traslados de cad�veres, mismos que ser�n exclusivos para tal fin.
                    Contar con personal suficiente y calificado para el manejo de cad�veres y restos humanos.
                    Proporcionar a los consumidores el cat�logo de productos y servicios.
                    Abstenerse de condicionar la prestaci�n de servicios o venta de productos a la adquisici�n de paquetes.
                    Informar a �El consumidor� las restricciones aplicables en la comercializaci�n del servicio materia del presente contrato, que en su caso correspondan.
                    Del Titular Sustituto y Beneficiarios:
                    NOVENA: �El Consumidor� designa como �Titular Sustituto� y como �Beneficiarios� a la(s) persona(s) se�aladas en la Car�tula del presente contrato. �El Titular Sustituto� est� plenamente facultado para decidir sobre la utilizaci�n de los servicios funerarios contratados, cuando �El Consumidor� este imposibilitado para hacerlo. Haciendo menci�n que en cualquier momento el �El Consumidor� puede cambiar o modificar esta designaci�n, en cuyo caso debe notificarlo por escrito a �El Proveedor� y anexar el escrito de aceptaci�n del nuevo �Titular Sustituto�.
                    En caso de que �El Consumidor� no designe a un �Titular Sustituto�, se tendr� a lo dispuesto en la legislaci�n aplicable.
                    El �Titular Sustituto� y los �Beneficiarios�, desde el momento de su designaci�n y aceptaci�n, est�n obligados a respetar los t�rminos y condiciones contenidos en el presente Contrato, incluyendo el pago de mensualidades pendientes.
                    La designaci�n de �Titular Sustituto� y �Beneficiarios� es un derecho de �El Consumidor� por lo que no podr� condicionarse su nombramiento al momento de la contrataci�n. �El Consumidor� podr� designarlos con posterioridad mediante comunicaci�n por escrito a �El Proveedor�.
                    De la Garant�a 
                    DECIMA: �El Proveedor� garantiza que el servicio objeto del presente contrato se prestara conforme a lo estipulado en el mismo, en el domicilio de �La Agencia Funeraria� se�alada en la Car�tula del presente contrato. En caso de que �El Proveedor� no pueda prestar el servicio en la misma, �ste deber� de otorgarle a �El Consumidor�, la prestaci�n del servicio en otro establecimiento con las mismas caracter�sticas y condiciones del servicio contratado sin costo extraordinario por el traslado o por cualquier otro concepto para �El Consumidor�.
                    De la cancelaci�n del saldo insoluto:
                    DECIMA PRIMERA: �El Proveedor� otorgar� exclusivamente a �El Consumidor� la cancelaci�n del saldo insoluto del precio pactado en caso de ocurrir su muerte por accidente. Este beneficio no cubre a los Titulares sustitutos o cesionarios, su vigencia ser� �nica y exclusivamente dentro de los 90 d�as siguientes a la firma del presente contrato.
                    Del �rea establecida para los servicios:
                    D�CIMA SEGUNDA: �El Proveedor� se obliga a prestar los servicios funerarios descritos en la Car�tula del presente contrato, �nica y exclusivamente dentro de la Ciudad de M�xico y �rea conurbada. Cuando el deceso de la persona que recibir� los servicios mencionados ocurra en el extranjero o en cualquier estado dentro de la Rep�blica Mexicana, �El Consumidor� o sus familiares se encargar�n de los tr�mites y traslado del cuerpo hacia la Ciudad de M�xico, absorbiendo �El Consumidor� o sus familiares los gastos correspondientes.
                    De la Cesi�n de derechos:
                    DECIMA TERCERA: �El Consumidor�, podr� sin costo, ceder en cualquier tiempo los derechos sobre el presente Contrato, debiendo informar por escrito a �El Proveedor� el nombre, domicilio y tel�fono del nuevo �Consumidor� y la exacta identificaci�n del mismo, quien en todo caso asumir� las obligaciones de pago que se encuentren pendientes. 
                    La cesi�n de los derechos contenidos en el Contrato que en su caso realice �El Consumidor�, deja sin efectos las designaciones de �Titular Sustituto� y Beneficiarios que hubiera hecho, en consecuencia el nuevo �Consumidor� tendr� el derecho de designar nuevo �Titular Sustituto� y �Beneficiarios�, en caso que as� lo desee. Para tal efecto se deber� observar lo establecido en la cl�usula novena del presente contrato.
                    Del Incumplimiento por mora: 
                    DECIMA CUARTA: S� �El Consumidor� no cumple con las obligaciones de pago en la caratula del presente contrato, se generaran intereses moratorios a favor de �El Proveedor� aplicando el inter�s mensual que resulte del Costo Porcentual Promedio (C.P.P.) que publica el Banco de M�xico o la f�rmula que la sustituya m�s tres puntos.
                    De la rescisi�n:
                    D�CIMA QUINTA: Son causas de rescisi�n:
                    a) Que alguna de �Las partes� no cumpla con lo estipulado en el presente contrato.
                    b) S� el Servicio prestado no corresponde con lo pactado y/o solicitado por �El Consumidor�.
                    S� la rescisi�n es causada por el incumplimiento de las obligaciones de �El Consumidor�, �El Proveedor� podr� retener la pena convencional de aquellas cantidades entregadas por el �El Consumidor� a cuenta del precio. Las cantidades que resultaren excedentes a favor de �El Consumidor�, deber�n ser devueltas por el �El Proveedor� entre los 15 d�as naturales siguientes a la fecha de la rescisi�n del contrato.
                    S� el incumplimiento fuera a cargo de �El Proveedor�, adem�s de la pena convencional se�alada, restituir� a �El Consumidor� las cantidades pagadas por �ste, oblig�ndose �El Proveedor� a realizar tal restituci�n en el plazo establecido en el p�rrafo anterior.
                    Pena convencional:
                    D�CIMA SEXTA: En caso de rescisi�n del presente Contrato, la parte que incumpla deber� pagar la pena convencional equivalente al 20% (veinte por ciento) del precio total del Servicio.
                    De la vigencia:
                    D�CIMA SEPTIMA: Una vez pagado el precio establecido, el presente contrato tendr� vigencia hasta cumplir con los servicios convenidos.
                    De la Cancelaci�n:
                    D�CIMA OCTAVA: �El Consumidor� dentro de un plazo de 5 d�as h�biles, contados a partir del d�a h�bil siguiente al de la firma de este contrato, podr� sin costo, cancelar mediante Aviso por escrito entregado personalmente o v�a correo certificado en el domicilio de �El Proveedor�, la contrataci�n de los servicios con derecho a que se le reintegren en su totalidad las cantidades por concepto de pago que haya realizado a la fecha, en un plazo no mayor a los 5 d�as h�biles siguientes a la fecha en que sea notificada a �El Proveedor� dicha cancelaci�n. En caso de que la solicitud de cancelaci�n est� fuera del plazo mencionado �El Proveedor� solicitar� a �El Consumidor� ratifique su solicitud de cancelaci�n y reintegrar� las cantidades entregadas, menos el 20% del valor total de la operaci�n por concepto de pena convencional, en un plazo no mayor a los 15 d�as naturales siguientes a la fecha en que sea notificada dicha cancelaci�n.
                    
                    De la NO Responsabilidad de �El Proveedor�
                    D�CIMA NOVENA: �El Proveedor� no se hace responsable, ni reintegrara cantidad alguna s� al fallecer �El Consumidor�, el �Titular Sustituto� o sus deudos, contratan los servicios de una Agencia Funeraria distinta por causa no imputable a �El Proveedor�; en todo caso subsiste la obligaci�n por parte de �El Proveedor� contenida en el presente contrato, quien prestar� el servicio funerario a cualquiera de los Titulares Sustitutos designados en la Car�tula del presente contrato.
                    Caso Fortuito o Fuerza Mayor.
                    VIGESIMA: �El Proveedor� no ser� responsable de ning�n retraso o falla en el cumplimiento de sus obligaciones, por caso fortuito o fuerza mayor, incluyendo, de manera enunciativa mas no limitativa: casos de guerra, terremotos, inundaciones, revueltas, bloqueos comerciales, o cualquier contingencia dentro o fuera de los Estados Unidos Mexicanos, que impidieran u obstaculizaran el cumplimiento de cualquiera de las obligaciones que se asumen conforme a este contrato, mismas que deben ser debidamente comprobadas por �El Proveedor�.
                    Cat�logo de servicios:
                    VIGESIMA PRIMERA: �El Proveedor� pone a disposici�n de �El Consumidor� un cat�logo en el que se describen los paquetes de los servicios funerarios que se ofrecen, el precio de los mismos y el detalle de los bienes y servicios que los integran. Los bienes y/o servicios que pueden contratarse sin necesidad de adquirir un paquete y los precios correspondientes, as� como la informaci�n de que el servicio funerario, ser� prestado por un tercero, como se establece en las declaraciones de �El Proveedor� en el presente contrato.
                    Procedimiento para la atenci�n de solicitudes de aclaraci�n, quejas y reclamaciones:
                    VIG�SIMA SEGUNDA: �El Consumidor� podr� presentar solicitudes de aclaraci�n o interponer quejas o reclamaciones acudiendo al domicilio de �El proveedor� o por v�a telef�nica, los datos del domicilio y tel�fono se encuentra en la Car�tula del presente contrato. La queja o reclamaci�n, tendr� que ser presentada mediante escrito libre, contra acuse de recibo en el domicilio de �El Proveedor�. Dicho escrito deber� contener el n�mero de contrato, nombre de �El Consumidor� y una relaci�n sucinta de los hechos materia de la queja o reclamaci�n. �El Proveedor� deber� atender la queja o reclamaci�n en un lapso no mayo de 48 (cuarenta y ocho) horas contadas a partir de recibida.
                    Aviso de privacidad:
                    VIGESIMA TERCERA: Previo a la firma del presente Contrato y en cumplimiento a lo dispuesto en la Ley Federal de Protecci�n de Datos Personales en Posesi�n de los Particulares, �El Proveedor� hizo del conocimiento a �El Consumidor� el aviso de privacidad, as� como del procedimiento para ejercer los derechos de acceso, rectificaci�n, cancelaci�n y oposici�n al tratamiento de sus datos personales en adelante, derechos ARCO.
                    Jurisdicci�n:
                    VIG�SIMA CUARTA: La Procuradur�a Federal del Consumidor es competente en la v�a administrativa para resolver cualquier controversia que suscite sobre la interpretaci�n o cumplimiento del presente contrato. Sin perjuicio de lo anterior las partes se someten a la jurisdicci�n y competencia de los Tribunales competentes de la Ciudad de M�xico, renunciando expresamente a cualquier otra jurisdicci�n que pudiera corresponderles, por raz�n de sus domicilios presentes o futuros o por cualquiera otra raz�n.
                    Le�do que fue por las partes el contenido del presente contrato, y una vez hecha la explicaci�n de su contenido y alcance legal, lo firman por duplicado en la Ciudad de M�xico, a los ___ d�as del mes de _______ del a�o 20____, entreg�ndole a �El Consumidor� un ejemplar del mismo.
                </p>
            </div>
        </div>
    </div>

    <div class="row" style="padding: 25px; text-align: center;">
        <div class="col-sm-12">
            <div class="row">
                <p>Autorizaci�n para la utilizaci�n de informaci�n con fines mercadot�cnicos o publicitarios:
                        �El Consumidor� SI ( ) No ( ) acepta que �El Proveedor� ceda o transmita a terceros, con fines mercadot�cnicos o publicitarios, la informaci�n proporcionada por �l con motivo del presente Contrato y si ( ) no ( ) acepta que �El Proveedor� le env�e publicidad sobre bienes y servicios.</p>
            </div>
        </div>
    </div>

    <div class="row" style="padding: 25px; text-align: center;">
            <div class="col-sm-12">
                <div class="row">
                    <p> �EL CONSUMIDOR�					 �EL PROVEEDOR� 

                            Este contrato fue aprobado y registrado por la Procuradur�a Federal del Consumidor bajo el n�mero ___________ de fecha ______ de _________ 2018. Cualquier variaci�n del presente contrato en perjuicio de EL CONSUMIDOR, frente al contrato de adhesi�n registrado se tendr� por no puesta.
                            </p>
                </div>
            </div>
        </div>


@endsection


@section('footer')
@endsection


