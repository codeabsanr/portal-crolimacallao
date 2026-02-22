**Informe de levantamiento de información\
CRO III Lima-Callao (crolimacallao.org.pe)\
**

Fecha: 20/02/2026

Propósito: inventariar páginas, contenidos, flujos y activos del sitio
actual; y definir una base técnica/funcional para un rediseño completo
(prototipo moderno).

# 1. Resumen ejecutivo

Se realizó un levantamiento de información del sitio web del Colegio
Regional de Obstetras III Lima-Callao (CRO III LC) y de sus subdominios
operativos (Mesa de Partes Virtual y Plataforma de Capacitación). El
resultado es un inventario de páginas y componentes funcionales,
identificación de contenidos dinámicos, y una propuesta de arquitectura
e implementación para un rediseño moderno (orientado a rendimiento, SEO,
accesibilidad, mantenibilidad y gobierno de contenidos).

Hallazgos clave:

-   El ecosistema web está fragmentado: conviven páginas en raíz y rutas
    tipo \"/\...php\", además de subdominios (tramite.,
    plataformadecapacitacion.).

-   Existen módulos con datos dinámicos (Noticias/Eventos/Busca
    Obstetra) que dependen de renderizado del lado cliente o consultas a
    backend; esto afecta indexación y consistencia.

-   Hay formularios que procesan datos personales (DNI, nombres,
    contacto) y carga de archivos (Mesa de Partes Virtual), lo que exige
    reforzar seguridad, privacidad y trazabilidad.

-   La navegación repite/mezcla estructuras entre versiones (www vs
    no-www y rutas antiguas), incrementando la deuda técnica y
    dificultando el mantenimiento.

# 2. Contexto institucional (según el propio sitio)

El CRO III Lima-Callao se presenta como una institución que vela por el
correcto ejercicio y desempeño de la obstetricia en la región Lima y
Callao, promoviendo el crecimiento y empoderamiento del profesional
obstetra mediante actualización de competencias y valores.

En el sitio también se describe el contexto histórico-normativo de la
profesión y del Colegio de Obstetras del Perú (COP) (p. ej. creación del
COP mediante Decreto Ley N.° 21210 y reconocimiento de obstetricia como
profesión médica por Ley N.° 23346), además de una reseña histórica de
la obstetricia en el Perú.

## 2.1 Datos de contacto y atención (según el sitio)

-   Dirección: Mariscal Sucre 1351, Pueblo Libre, Lima, Perú.

-   Teléfono principal (publicado): +51 982 520 891.

-   Correo de trámite documentario (publicado):
    tramitedocumentario@crolimacallao.org.pe.

-   Horario (publicado en home): lunes a viernes 9:00 a.m. a 5:30 p.m.;
    sábados 9:00 a.m. a 12 m.

# 3. Alcance, metodología y limitaciones

## 3.1 Alcance

Incluye: páginas públicas identificadas en menús principales, páginas
relacionadas encontradas por búsqueda interna (site:), y revisión de
subdominios funcionales asociados (Mesa de Partes Virtual y Moodle).

## 3.2 Metodología

-   Revisión de la navegación (menú principal y footer) para identificar
    secciones y URLs.

-   Búsqueda dirigida (site:) para localizar páginas no enlazadas desde
    el menú (p. ej. detalles de noticias/eventos).

-   Lectura de formularios y flujos de usuario (Portal del Colegiado,
    Mesa de Partes Virtual, Moodle).

-   Identificación de patrones de URL y contenidos dinámicos
    (parámetros, IDs, paneles).

## 3.3 Limitaciones

No se detectó un sitemap.xml públicamente indexado. Algunas secciones se
renderizan en cliente o dependen de scripts y no muestran completamente
su contenido en una lectura HTML estática. Por ello, el inventario cubre
las rutas y patrones descubiertos, pero no garantiza el 100% de URLs
históricas o no indexadas.

# 4. Inventario de activos digitales

## 4.1 Dominios y subdominios identificados

  -----------------------------------------------------------------------------------
  Host                                            Rol / Descripción
  ----------------------------------------------- -----------------------------------
  www.crolimacallao.org.pe                        Sitio principal (home y rutas tipo
                                                  /\...php).

  crolimacallao.org.pe                            Rutas adicionales; parte del
                                                  contenido se encuentra también sin
                                                  www.

  tramite.crolimacallao.org.pe                    Sistema Mesa de Partes Virtual
                                                  (nuevo trámite / consulta).

  plataformadecapacitacion.crolimacallao.org.pe   Plataforma de capacitación
                                                  (Moodle).
  -----------------------------------------------------------------------------------

## 4.2 Mapa de navegación principal (estructura funcional)

Estructura observada en el menú del sitio:

**Institucional**

-   Quiénes Somos

-   Consejo Directivo

-   Reseña Histórica

-   Símbolos

-   Compendio de Normas

-   Reglamento

-   Normatividad

-   Convenios

**Trámites**

-   Habilidad

-   Colegiatura

-   Especialidad

-   Maestría

-   Doctorados

-   Asesoría Legal

-   Auspicios

-   Adscripción/Cese

-   Carné

**Colegiados**

-   Obstetras Certificadas

-   Obstetras Especialistas

-   Obstetras Magister

-   Obstetras Doctorado

**Capacitación**

-   Lunes de Gestión Obstétrica

-   Martes de Actualización

-   Jueves de Obstetras Investigadores

-   Cursos Especializados

-   Valoración de Normas de Competencias

-   Curso/Taller Normas de Competencias

-   Congresos

**Otros accesos**

-   Comité Electoral Regional

-   Aula virtual (Moodle)

-   Biblioteca

-   Busca Obstetra

-   Portal del Colegiado

-   Mesa de Partes Virtual

-   Encuesta

-   Intranet

-   Libro de Reclamaciones

## 4.3 Enlaces externos (redes)

-   Facebook (enlazado desde cabecera de páginas antiguas).

-   Twitter/X (enlazado desde cabecera de páginas antiguas).

-   YouTube (enlazado desde cabecera de páginas antiguas).

# 5. Inventario de páginas y funcionalidades

La siguiente tabla consolida las rutas principales y su función.
Observación: varias rutas existen en dos variantes (www vs sin www) y/o
en versión \'antigua\' con parámetro panel.

  ----------------------------------------------------------------------------------------------------------------------------------------------------
  Sección            URL                                                                     Acceso            Función                  Notas
  ------------------ ----------------------------------------------------------------------- ----------------- ------------------------ --------------
  Home               https://www.crolimacallao.org.pe/                                       Pública           Presentación,            
                                                                                                               noticias/eventos         
                                                                                                               destacados, accesos      
                                                                                                               rápidos, teléfonos y     
                                                                                                               horarios.                

  Quiénes Somos      https://crolimacallao.org.pe/quien-somos.php                            Pública           Descripción              
                                                                                                               institucional.           

  Reseña Histórica   https://crolimacallao.org.pe/rhistorica.php                             Pública           Historia de la           
                                                                                                               institución/profesión.   

  Consejo Directivo  https://crolimacallao.org.pe/consejo.php                                Pública           Listado de               
                                                                                                               autoridades/gestión.     

  Símbolos           https://crolimacallao.org.pe/himno.php                                  Pública           Himno / símbolos.        

  Normatividad       https://crolimacallao.org.pe/normatividad.php?panel=1                   Pública           Acceso a Leyes, Normas   
  (portal)                                                                                                     Técnicas, Guías (vía     
                                                                                                               panel).                  

  Leyes              https://crolimacallao.org.pe/normatividad.php?panel=1                   Pública           Repositorio/descargas de Panel 1
                                                                                                               leyes.                   

  Normas técnicas    https://crolimacallao.org.pe/normatividad.php?panel=2                   Pública           Repositorio/descargas de Panel 2
                                                                                                               normas técnicas.         

  Guías              https://crolimacallao.org.pe/normatividad.php?panel=3                   Pública           Repositorio/descargas de Panel 3
                                                                                                               guías.                   

  Servicios          https://crolimacallao.org.pe/servicios.php?panel=1                      Pública           Sistemas de pago,        Vía secciones
                                                                                                               asesoría legal y         internas
                                                                                                               convenios.               

  Habilidad          https://crolimacallao.org.pe/habilidad.php                              Pública           Definición de            
                                                                                                               \'colegiado habilitado\' 
                                                                                                               y criterios del          
                                                                                                               estatuto.                

  Colegiatura        https://crolimacallao.org.pe/colegiatura.php                            Pública           Estatuto: colegiación    
                                                                                                               como requisito para      
                                                                                                               ejercer.                 

  Segunda            https://crolimacallao.org.pe/segundae.php                               Pública           Requisitos y pagos para  
  especialidad                                                                                                 registro de              
                                                                                                               especialidad.            

  Maestría           https://crolimacallao.org.pe/maestria.php                               Pública           Requisitos y pagos para  
                                                                                                               registro de maestría.    

  Doctorado          https://crolimacallao.org.pe/doctorado.php                              Pública           Requisitos y pagos para  
                                                                                                               registro de doctorado.   

  Adscripción/Cese   https://crolimacallao.org.pe/cese.php                                   Pública           Procedimiento de         
                                                                                                               adscripción y cese;      
                                                                                                               envío por correo en PDF. 

  Carné              https://crolimacallao.org.pe/carne.php                                  Pública           Recarnetización y        
                                                                                                               duplicado; pasos, montos 
                                                                                                               y envío de documentos.   

  Busca Obstetra     https://www.crolimacallao.org.pe/buscar-obstetra.php                    Pública           Búsqueda de              Renderizado en
                                                                                                               profesionales; campos    cliente
                                                                                                               como COP, fecha,         
                                                                                                               situación.               

  Portal del         https://crolimacallao.org.pe/actualizacion.php                          Privada           Login con número de      
  Colegiado                                                                                                    colegiatura +            
                                                                                                               contraseña.              

  Intranet           https://crolimacallao.org.pe/intranet.php                               Privada           Login                    
                                                                                                               usuario/contraseña.      

  Capacitación       https://crolimacallao.org.pe/capacitacion.php?panel=1                   Pública           Listado de               
  (histórico)                                                                                                  cursos/talleres y        
                                                                                                               recursos descargables    
                                                                                                               (PDF).                   

  Aula virtual       https://plataformadecapacitacion.crolimacallao.org.pe/login/index.php   Privada/Pública   Plataforma de cursos;    
  (Moodle)                                                                                                     login y gestión de       
                                                                                                               cursos.                  

  Comité Electoral   https://crolimacallao.org.pe/cer.php                                    Pública           Sección de comité        
  Regional                                                                                                     electoral (periodo       
                                                                                                               2024-2025).              

  Biblioteca virtual https://crolimacallao.org.pe/biblioteca.php                             Pública           Acceso a                 
                                                                                                               biblioteca/documentos.   

  Bolsa de trabajo   https://crolimacallao.org.pe/bolsa-trabajo.php                          Pública           Convocatorias y avisos   
                                                                                                               de empleo.               

  Noticias (listado) https://crolimacallao.org.pe/noticias.php                               Pública           Categorías/buscador;     
                                                                                                               detalles en              
                                                                                                               \'detalle-noticia\'.     

  Noticias (detalle) https://crolimacallao.org.pe/detalle-noticia.php?codigo={id}            Pública           Detalle de noticia (id   
                                                                                                               numérico).               

  Eventos (listado)  https://crolimacallao.org.pe/eventos.php                                Pública           Listado/registro;        
                                                                                                               inscripción con datos    
                                                                                                               personales.              

  Eventos (detalle)  https://crolimacallao.org.pe/detalle-evento.php?codigo={id}             Pública           Detalle de evento (id    
                                                                                                               numérico).               

  Contáctenos        https://www.crolimacallao.org.pe/contactenos.php                        Pública           Teléfonos por área,      
                                                                                                               horarios, formulario de  
                                                                                                               contacto.                

  Encuesta           https://crolimacallao.org.pe/encuesta.php                               Pública           Encuesta de experiencia  
                                                                                                               del sitio + sugerencias. 

  Libro de           https://crolimacallao.org.pe/BBB/libro.php                              Pública           Formulario de            
  Reclamaciones                                                                                                queja/reclamo.           

  Mesa de Partes     https://tramite.crolimacallao.org.pe/tramite_nuevo.php                  Pública           Formulario con DNI,      Carga de
  Virtual (nuevo                                                                                               remitente, tipo doc y    pdf/docx
  trámite)                                                                                                     adjunto.                 

  Mesa de Partes     https://tramite.crolimacallao.org.pe/consulta_tramite.php               Pública           Consulta de              
  Virtual (consulta)                                                                                           estado/seguimiento de    
                                                                                                               trámite.                 
  ----------------------------------------------------------------------------------------------------------------------------------------------------

# 6. Contenidos dinámicos y modelos de datos

## 6.1 Tipos de contenido detectados

  -----------------------------------------------------------------------
  Tipo                                Campos / Observaciones
  ----------------------------------- -----------------------------------
  Noticia                             id (codigo), título, fecha,
                                      categoría, cuerpo (texto/imagen),
                                      enlaces externos

  Evento                              id (codigo), título, fecha
                                      inicio/fin, hora, dirección, costos
                                      por tipo, fotos, formulario de
                                      inscripción

  Documento normativo                 categoría, título, formato (PDF),
                                      fecha/resolución, URL de descarga

  Convenio                            título, año, PDF asociado

  Registro de colegiado               COP, nombres/apellidos, fecha
                                      colegiatura, situación/habilidad
                                      (publicado vía buscador)

  Trámite (Mesa de Partes)            DNI, remitente, asunto, adjunto
                                      (pdf/docx), seguimiento/estado

  Curso/Capacitación                  título, fecha, afiche/imagen, PDF
                                      asociado o inscripción
  -----------------------------------------------------------------------

## 6.2 Patrones de URL

-   Páginas PHP directas: /quien-somos.php, /colegiatura.php,
    /carne.php, etc.

-   Listados con parámetro panel: /capacitacion.php?panel=1,
    /normatividad.php?panel=1, /servicios.php?panel=1.

-   Detalle con parámetro código: /detalle-noticia.php?codigo=NNN y
    /detalle-evento.php?codigo=NNN.

-   Subdominio de trámites: tramite.crolimacallao.org.pe con rutas
    /tramite_nuevo.php y /consulta_tramite.php.

-   Subdominio de capacitación (Moodle):
    plataformadecapacitacion.crolimacallao.org.pe (login, cursos, etc.).

# 7. Flujos de usuario actuales

## 7.1 Flujos públicos

-   Buscar Obstetra: el usuario ingresa criterios y obtiene COP, fecha
    de colegiatura, situación e indicador de habilitación.

-   Consultar requisitos de trámites: colegiatura, especialidad,
    maestría, doctorado, cese/adscripción, carné (con montos y cuentas
    publicadas).

-   Ver convenios y descargar PDFs asociados.

-   Revisar cursos/eventos y realizar inscripción (formulario de
    evento).

-   Enviar contacto (formulario) y registrar reclamo/queja (Libro de
    Reclamaciones).

## 7.2 Flujos autenticados

-   Portal del Colegiado: autenticación por número de colegiatura y
    contraseña.

-   Intranet: autenticación usuario/contraseña (no se documentan módulos
    internos sin credenciales).

-   Aula virtual (Moodle): login estándar; puede permitir creación de
    cuenta y/o acceso invitado según curso.

## 7.3 Trámite documentario (Mesa de Partes Virtual)

El formulario de nuevo trámite solicita DNI y datos personales del
remitente, además de tipo y número de documento, asunto y adjunto
(pdf/docx). Esto implica un flujo de carga de archivos y tratamiento de
datos personales.

# 8. Observaciones de calidad (UX/UI, contenido, técnica)

## 8.1 UX/UI y consistencia

-   Duplicidad de navegación y coexistencia de rutas (www/no-www +
    páginas con panel), lo que confunde al usuario y complica SEO.

-   Secciones con renderizado del lado cliente (p. ej. Busca Obstetra)
    mostrando plantillas ({{ }}) cuando no ejecuta JS.

-   En algunas páginas se observa mensaje de \'outdated browser\' o
    \'Loading\...\', indicio de dependencias legacy.

## 8.2 Contenido y gobierno

-   Mezcla de contenidos históricos (2017-2019) con contenidos
    recientes; falta de segmentación temporal/archivos claros.

-   Documentos PDF dispersos en múltiples rutas; no existe un
    repositorio unificado con metadatos consistentes.

-   Páginas de listados (noticias.php) no muestran claramente el listado
    en HTML estático; riesgo para indexación.

## 8.3 Seguridad y privacidad

-   Formularios que procesan DNI, nombres, correos, direcciones y
    adjuntos: requiere cifrado en tránsito (HTTPS), validaciones
    robustas, anti-bot, y políticas de retención.

-   Recomendable incorporar registro de auditoría (quién envía qué,
    cuándo) y notificaciones transaccionales verificables.

# 9. Propuesta de rediseño (visión futura)

## 9.1 Objetivos de producto

-   Unificar experiencia y arquitectura: un solo sitio público coherente
    y \'source of truth\' para contenidos.

-   Mejorar rendimiento y accesibilidad (Core Web Vitals, WCAG 2.2 AA).

-   Potenciar SEO y analítica: rutas limpias, metadatos, schema.org,
    sitemap, robots, eventos/noticias indexables.

-   Reducir esfuerzo operativo: CMS y flujos editoriales (roles,
    aprobaciones, versionado).

## 9.2 Nueva arquitectura de información sugerida (IA)

**Inicio**

-   Accesos rápidos

-   Noticias

-   Eventos

-   Servicios frecuentes

-   Contactos

**Institución**

-   Quiénes somos

-   Autoridades

-   Transparencia/Documentos

-   Historia

-   Convenios

**Trámites**

-   Habilidad

-   Colegiatura

-   Registros (especialidad/maestría/doctorado)

-   Carné

-   Mesa de Partes Virtual

-   Preguntas frecuentes

**Colegiados**

-   Buscador de colegiados

-   Listados por categoría (si aplica)

-   Guía de habilitación

**Capacitación**

-   Calendario

-   Cursos

-   Congresos

-   Aula virtual

**Normativa**

-   Leyes

-   Reglamentos

-   Guías

-   Repositorio con filtros

**Contacto**

-   Canales

-   Horario

-   Libro de reclamaciones

## 9.3 Arquitectura técnica recomendada (alto nivel)

Stack sugerido para el nuevo front-end: Next.js 15 (App Router) +
TypeScript + Tailwind/Design System + SSR/ISR para SEO.

-   CMS headless (p. ej. Strapi/Directus/Sanity/Contentful) como
    repositorio de noticias, eventos, documentos, convenios y páginas
    estáticas.

-   API Gateway/BFF (Backend for Frontend) para integrar sistemas
    existentes: Portal del Colegiado, búsqueda de obstetras, Mesa de
    Partes y Moodle.

-   Autenticación: OIDC/SAML si existe IdP institucional; en su defecto,
    NextAuth + integración con base de datos actual mediante API segura.

-   Repositorio documental: almacenamiento tipo S3 compatible +
    antivirus/escaneo para uploads + URLs firmadas.

-   Observabilidad: logging centralizado, métricas, tracing; analítica
    (Matomo/GA4).

## 9.4 Plan de implementación por fases

  -----------------------------------------------------------------------
  Fase                                Entregables
  ----------------------------------- -----------------------------------
  Fase 0 - Descubrimiento (Discovery) Inventario final, entrevistas,
                                      analítica, definición de KPIs,
                                      benchmark, backlog priorizado.

  Fase 1 - IA + Diseño                Arquitectura de información,
                                      wireframes, UI kit / design system,
                                      prototipo navegable.

  Fase 2 - MVP público                Inicio, Institución, Trámites,
                                      Normativa, Noticias, Eventos,
                                      Contacto; CMS operativo.

  Fase 3 - Integraciones              Buscador de colegiados, Portal del
                                      colegiado, Mesa de Partes, Moodle;
                                      hardening de seguridad.

  Fase 4 - Migración y SEO            Redirecciones 301, sitemap,
                                      contenidos, pruebas, lanzamiento.

  Fase 5 - Operación                  Monitoreo, mejora continua,
                                      gobierno de contenidos, roadmap
                                      trimestral.
  -----------------------------------------------------------------------

# 10. Recomendaciones específicas de mejora (checklist)

-   Unificar dominio canónico (elegir www o no-www) + forzar HTTPS +
    redirecciones 301 consistentes.

-   Crear sitemap.xml y robots.txt; corregir indexación de noticias y
    eventos (SSR/ISR).

-   Normalizar URLs (slug) y evitar parámetros panel en el nuevo sitio.

-   Estandarizar formularios: validación, mensajes, reCAPTCHA/anti-bot,
    consentimientos, política de privacidad.

-   Implementar WCAG AA: contraste, navegación por teclado, etiquetas,
    focus states.

-   Optimizar imágenes, lazy loading, y asegurar Core Web Vitals.

-   Estandarizar repositorio documental con metadatos (tipo, fecha,
    resolución, categoría, tags) y búsqueda.

-   Seguridad de cargas: límites de tamaño, tipos permitidos, escaneo
    antivirus, almacenamiento seguro, auditoría.

# 11. Anexos

## 11.1 URLs fuente consultadas (referencial)

Fecha de consulta: 20/02/2026.

-   https://www.crolimacallao.org.pe/

-   https://www.crolimacallao.org.pe/buscar-obstetra.php

-   https://crolimacallao.org.pe/servicios.php?panel=1

-   https://crolimacallao.org.pe/habilidad.php

-   https://crolimacallao.org.pe/segundae.php

-   https://crolimacallao.org.pe/maestria.php

-   https://crolimacallao.org.pe/doctorado.php

-   https://crolimacallao.org.pe/carne.php

-   https://crolimacallao.org.pe/cese.php

-   https://tramite.crolimacallao.org.pe/tramite_nuevo.php

-   https://plataformadecapacitacion.crolimacallao.org.pe/login/index.php

-   https://www.crolimacallao.org.pe/contactenos.php

-   https://crolimacallao.org.pe/BBB/libro.php
