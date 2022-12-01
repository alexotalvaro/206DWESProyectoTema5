
/**
 * Author:  Alejandro Otalvaro
 * Created: 3 nov 2022
 */

use dbs9174059;



/*CREACION DE LA TABLA CON SUS RESPECTIVOS CAMPOS*/
create table if not exists T01_Usuario (
 T01_CodUsuario varchar(8) Primary Key,
 T01_Password varchar(8),
 T01_DescUsuario varchar(255),
 T01_FechaHoraUltimaConexion timestamp(6),
 T01_NumConexiones int(255),
 T01_Perfil varchar(8),
 T01_ImagenUsuario varchar(100);
 


/*CREACION DE LA TABLA CON SUS RESPECTIVOS CAMPOS*/
create table if not exists T02_Departamento (
  CodDepartamento varchar(3) Primary key,
  DescDepartamento varchar (255),
  fechaAlta timestamp(6),
  fechaBaja timestamp(6),
  volumenNegocio float);

