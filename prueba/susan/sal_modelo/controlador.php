    <?php

include 'conexion.php';

class controlador extends conexion {
	private $fine;
	private $user ;
	private $password;
    private $privilegios;
	private $consulta ;
	private $conexion;
    private $permiso;
	private $row, $pas1 , $pas2;
    private $usuario, $nombre, $paterno, $materno, $colegio, $profesion, $condicion, $email, $face, $direccion, $telefono, $cargo, $ingreso, $salida, $nombreest, $pass, $estado, $verificar, $verificardni;
    private $his_clinica, $dni_pac, $nom_pac, $pat_pac, $mat_pac, $sexo_pac, $fecnac_pac, $lugnac_pac, $estcivil_pac, $domicilio_pac, $ref_pac, $seguro_pac, $tel_pac, $email_pac, $face_pac, $nombre_est, $barrio_pac;
    private $variable;

public function controlador(){

	$conect = new conexion();
	$this->conexion = $conect -> conectar();
	$conect -> seleccion_db();

	}

//	public  function login($usuario, $pass){
//		$this->user = $usuario;
//		$this->password= $pass;
//		$this->consulta= mysql_query("SELECT dni_per , pass_per FROM personal where dni_per = '".$this->user."' and  pass_per = '".$this->password."'" , $this->conexion);
//               if($this->row = mysql_fetch_array($this->consulta)){
//                  session_start();
//                    $this->consulta = mysql_query("SELECT * FROM personal where dni_per = '".$this->user."' ",  $this->conexion);
//                    $this->row = mysql_fetch_array($this->consulta);
//                    $this->id = $this->row['dni_per'];
//                    $_SESSION['dni_per'] = $this->id;
//                    $this->ini = 1;
//                    $this->id = $this->row['nom_per'];
//                    $_SESSION['nom_per'] = $this->id;
//                    $this->id = $this->row['pat_per'];
//                    $_SESSION['pat_per'] = $this->id;
//                    //$this->id = $this->row['nombre_est'];
//                    //$_SESSION['nombre_est'] = $this->id;
//                         header("Location: ../sal_vista/per_directorio.php");
//                }else{
//                        header("Location: /per_error.php");
//                }
//                return $this->consulta ;
//	}

public  function login($usuario, $pass, $permiso, $estable){
        $this->user = $usuario;
        $this->password= $pass;
        $this->permiso=$permiso;
        $this->establecimiento=$estable;
        $this->consulta= mysql_query("SELECT dni_per , pass_per , nombre_est , permiso FROM personal where dni_per = '".$this->user."' and  pass_per = '".$this->password."' and permiso = '".$this->permiso."' and nombre_est = '".$this->establecimiento."'" , $this->conexion);

                    if($this->row = mysql_fetch_array($this->consulta)){
                        session_start();
                        $this->consulta = mysql_query("SELECT * FROM personal where dni_per = '".$this->user."' and nombre_est = '".$this->establecimiento."'" ,  $this->conexion);
                        $this->row = mysql_fetch_array($this->consulta);
                        $this->id = $this->row['dni_per'];
                        $_SESSION['dni_per'] = $this->id;
                        $this->ini = 1;
                        $this->id = $this->row['nom_per'];
                        $_SESSION['nom_per'] = $this->id;
                        $this->id = $this->row['pat_per'];
                        $_SESSION['pat_per'] = $this->id;
                        $this->id = $this->row['nombre_est'];
                        $_SESSION['nombre_est'] = $this->id;
                             header("Location: ../sal_vista/per_directorio.php");
                    }else{
                            header("Location: /per_error.php");
                    }
                    return $this->consulta ;
    }

    public function verificar($pass1 , $pass2){

            $this->fine = false;

            $this->pas1 = $pass1;
            $this->pas2 = $pass2;


            if($this->pas1 == $this->pas2){

                $this->fine = true ;


            }


            return $this->fine ;
        }

	public function registrar($dni, $nom, $pat, $mat,$coleg,$prof,$condi,$email,$face,$dir,$tel,$enc,$fecin,$fecba,$nombre,$pass,$estado){

            $this->usuario      = $dni;
            $this->nombre       = $nom;
            $this->paterno      = $pat;
            $this->materno      = $mat;
            $this->colegio      = $coleg;
            $this->profesion    = $prof;
            $this->condicion    = $condi;
            $this->email        = $email;
            $this->face         = $face;
            $this->direccion    = $dir;
            $this->telefono     = $tel;
            $this->cargo        = $enc;
            $this->ingreso      = $fecin;
            $this->salida       = $fecba;
            $this->nombreest    = $nombre;
            $this->pass         = $pass;
            $this->estado       = $estado;
            //$this->current_date = date("Y-m-d H:i:s");


            $this->verificar = mysql_query("SELECT dni_per FROM personal where dni_per = '".$this->usuario."' " ,  $this->conexion );


            if($this->row = mysql_fetch_array($this->verificar)){

                echo "<h1>EL USUARIO QUE ACABA DE INGRESAR YA EXISTE</h1>";

            }else if(!$this->row = mysql_fetch_array($this->verificar)){

                mysql_query("INSERT INTO personal(dni_per, nom_per, pat_per, mat_per, coleg_per, prof_per,condi_per, email_per, face_per, dir_per, tel_per, enc_per, fecin_per, fecba_per, nombre_est, pass_per, estado_per) values('$this->usuario', '$this->nombre' , '$this->paterno', '$this->materno', '$this->colegio', '$this->profesion', '$this->condicion', '$this->email', '$this->face', '$this->direccion', '$this->telefono', '$this->cargo', '$this->ingreso', '$this->salida', '$this->nombreest', '$this->pass','$this->estado')", $this->conexion );



               header("location: ../index.php");

            }
        }

    public function pac_registrar($his_clinica, $dni_pac, $nom_pac, $pat_pac, $mat_pac, $sexo_pac, $fecnac_pac, $lugnac_pac, $estcivil_pac, $domicilio_pac, $ref_pac, $seguro_pac, $tel_pac, $email_pac, $face_pac, $nombre_est, $barrio_pac)
    {
        $this->his_clinica  =$his_clinica;
        $this->dni_pac      =$dni_pac;
        $this->nom_pac      =$nom_pac;
        $this->pat_pac      =$pat_pac;
        $this->mat_pac      =$mat_pac;
        $this->sexo_pac     =$sexo_pac;
        $this->fecnac_pac   =$fecnac_pac;
        $this->lugnac_pac   =$lugnac_pac;
        $this->estcivil_pac =$estcivil_pac;
        $this->domicilio_pac=$domicilio_pac;
        $this->ref_pac      =$ref_pac;
        $this->seguro_pac   =$seguro_pac;
        $this->tel_pac      =$tel_pac;
        $this->email_pac    =$email_pac;
        $this->face_pac     =$face_pac;
        $this->nombre_est   =$nombre_est;
        $this->barrio_pac   =$barrio_pac;

        session_start();

        $this->veri=mysql_query("SELECT his_clinica FROM paciente where his_clinica= '".$this->his_clinica."'", $this->conexion);
        $this->veridni=mysql_query("SELECT dni_pac FROM paciente where dni_pac= '".$this->dni_pac."'", $this->conexion);

        if (mysql_num_rows($this->veri)==0 and mysql_num_rows($this->veridni)==0) {
            mysql_query("INSERT INTO paciente(his_clinica, dni_pac, nom_pac, pat_pac, mat_pac, sexo_pac, fecnac_pac, lugnac_pac, estcivil_pac, domicilio_pac, ref_pac, seguro_pac, tel_pac, email_pac, face_pac, nombre_est, barrio_pac) values ('$this->his_clinica','$this->dni_pac', '$this->nom_pac', '$this->pat_pac', '$this->mat_pac', '$this->sexo_pac', '$this->fecnac_pac', '$this->lugnac_pac', '$this->estcivil_pac', '$this->domicilio_pac', '$this->ref_pac', '$this->seguro_pac', '$this->tel_pac', '$this->email_pac', '$this->face_pac', '$this->nombre_est', '$this->barrio_pac')", $this->conexion);
            echo"<script>alert('Paciente Registrado Click en Aceptar por Favor')</script>";
            header("location: ../sal_vista/pac_crear.php");
        }else{
            //echo "LA HISTORIA CLINICA O EL DNI QUE ACABA DE INGRESAR YA EXISTE";
            header("location: ../sal_vista/pac_error.php");
        }

    }

    public function pac_actualizar($his_clinica, $dni_pac, $nom_pac, $pat_pac, $mat_pac, $sexo_pac, $fecnac_pac, $lugnac_pac, $estcivil_pac, $domicilio_pac, $ref_pac, $seguro_pac, $tel_pac, $email_pac, $face_pac, $nombre_est, $barrio_pac)
    {
        $this->his_clinica  =$his_clinica;
        $this->dni_pac      =$dni_pac;
        $this->nom_pac      =$nom_pac;
        $this->pat_pac      =$pat_pac;
        $this->mat_pac      =$mat_pac;
        $this->sexo_pac     =$sexo_pac;
        $this->fecnac_pac   =$fecnac_pac;
        $this->lugnac_pac   =$lugnac_pac;
        $this->estcivil_pac =$estcivil_pac;
        $this->domicilio_pac=$domicilio_pac;
        $this->ref_pac      =$ref_pac;
        $this->seguro_pac   =$seguro_pac;
        $this->tel_pac      =$tel_pac;
        $this->email_pac    =$email_pac;
        $this->face_pac     =$face_pac;
        $this->nombre_est   =$nombre_est;
        $this->barrio_pac   =$barrio_pac;

        //$this->veri = mysql_query("SELECT his_clinica, dni_pac, nom_pac, pat_pac, mat_pac, sexo_pac, fecnac_pac, lugnac_pac, estcivil_pac, domicilio_pac, ref_pac, seguro_pac, tel_pac, email_pac, face_pac, nombre_est, barrio_pac FROM paciente where his_clinica = '".$this->his_clinica."'" ,$this->conexion);

        //if(mysql_num_rows($this->veri)>0)
        //{
            mysql_query("UPDATE paciente SET  dni_pac='".$this->dni_pac."', nom_pac='".$this->nom_pac."', pat_pac='".$this->pat_pac."', mat_pac='".$this->mat_pac."', sexo_pac='".$this->sexo_pac."', fecnac_pac='".$this->fecnac_pac."', lugnac_pac='".$this->lugnac_pac."', estcivil_pac='".$this->estcivil_pac."', domicilio_pac='".$this->domicilio_pac."', ref_pac='".$this->ref_pac."', seguro_pac='".$this->seguro_pac."', tel_pac='".$this->tel_pac."', email_pac='".$this->email_pac."', face_pac='".$this->face_pac."', nombre_est='".$this->nombre_est."', barrio_pac='".$this->barrio_pac."' where his_clinica='".$this->his_clinica."'" , $this->conexion);
            header("Location: ../sal_vista/pac_buscar.php");

        //}else{
          //  echo "EL PACIENTE NO ESTA REGISTRADO...";
        //}

    }

    public function pac_eliminar($his_clinica)
    {
        $this->his_clinica  =$his_clinica;
        //$this->veri = mysql_query("SELECT his_clinica FROM paciente where his_clinica = '".$this->his_clinica."'" ,$this->conexion);

        //if(mysql_num_rows($this->veri)>0){
                mysql_query("DELETE FROM paciente where his_clinica = '".$this->his_clinica."'");
                header("Location: ../sal_vista/pac_buscar.php");
       // }else{
            //echo "LA HISTORIA CLINICA NO EXISTE";
        //}

    }

    public function pac_buscar_pat($pat_pac)
    {
        $this->pat_pac      =$pat_pac;
        //session_start();


        $this->veri = mysql_query("SELECT his_clinica, dni_pac, nom_pac, pat_pac, mat_pac FROM paciente where pat_pac = '".$this->pat_pac."'" ,$this->conexion);
        if(mysql_num_rows($this->veri)>0)
        {

 //           Print "<table border cellpadding=3>";
            Print "<table class='table table-striped table-hover table-condensed'>";

                    Print  "<tr>"; Print "<th>HC</th>";
                    Print "<th>DNI</th>";
                    Print "<th>Paterno</th>";
                    Print "<th>Materno</th>";
                    Print "<th>Nombre</th>";
                    Print "<th></th>";
                    Print "<th></th>";
                    Print "<th></th>";


            while($this->row = mysql_fetch_array($this->veri)){


                Print "<tr>";Print "<td>".$this->row['his_clinica']."</td> ";
                Print "<td>".$this->row['dni_pac'] . "</td> ";
                Print "<td>".$this->row['pat_pac'] . "</td> ";
                Print "<td>".$this->row['mat_pac'] . "</td> ";
                Print "<td>".$this->row['nom_pac'] . "</td> ";
                Print "<td>";Print "<a href= pac_ver.php?his_clinica=".$this->row['his_clinica'] . ">Detalles</a>";
                print"</td>";
                Print "<td>";Print "<a href= pac_actualizar.php?his_clinica=".$this->row['his_clinica'] . ">Actualizar</a>";
                print"</td>";
                Print "<td>";Print "<a href= pac_eliminar.php?his_clinica=".$this->row['his_clinica'] . ">Eliminar</a>";
                Print "</td></tr>";

                //Print "<td>".$this->row['mat_pac'] . " </td></tr>";
           }Print "</table>";

        }else{
            echo "EL PACIENTE NO EXISTE";
        }
    }

    public function pac_buscar_hc($his_clinica)
    {
        $this->his_clinica      =$his_clinica;
        //session_start();


        $this->veri = mysql_query("SELECT his_clinica, dni_pac, nom_pac, pat_pac, mat_pac FROM paciente where his_clinica = '".$this->his_clinica."'" ,$this->conexion);
        if(mysql_num_rows($this->veri)>0)
        {

//            Print "<table border cellpadding=3>";
              Print "<table class='table table-striped table-hover table-condensed'>";

                    Print  "<tr>"; Print "<th>HC</th>";
                    Print "<th>DNI</th>";
                    Print "<th>Paterno</th>";
                    Print "<th>Materno</th>";
                    Print "<th>Nombre</th>";
                    Print "<th></th>";
                    Print "<th></th>";
                    Print "<th></th>";


            while($this->row = mysql_fetch_array($this->veri)){


                Print "<tr>";Print "<td>".$this->row['his_clinica']."</td> ";
                Print "<td>".$this->row['dni_pac'] . "</td> ";
                Print "<td>".$this->row['pat_pac'] . "</td> ";
                Print "<td>".$this->row['mat_pac'] . "</td> ";
                Print "<td>".$this->row['nom_pac'] . "</td> ";
                Print "<td>";Print "<a href= pac_ver.php?his_clinica=".$this->row['his_clinica'] . ">Detalles</a>";
                print"</td>";
                Print "<td>";Print "<a href= pac_actualizar.php?his_clinica=".$this->row['his_clinica'] . ">Actualizar</a>";
                print"</td>";
                Print "<td>";Print "<a href= pac_eliminar.php?his_clinica=".$this->row['his_clinica'] . ">Eliminar</a>";
                Print "</td></tr>";
           }Print "</table>";

        }else{
            echo "EL PACIENTE NO EXISTE";
        }
    }

    public function pac_buscar_dni($dni_pac)
    {
        $this->dni_pac      =$dni_pac;
        $this->veri = mysql_query("SELECT his_clinica, dni_pac, nom_pac, pat_pac, mat_pac FROM paciente where dni_pac = '".$this->dni_pac."'" ,$this->conexion);
        if(mysql_num_rows($this->veri)>0)
        {

//            Print "<table border cellpadding=3>";
              Print "<table class='table table-striped table-hover table-condensed'>";

                    Print  "<tr>"; Print "<th>HC</th>";
                    Print "<th>DNI</th>";
                    Print "<th>Paterno</th>";
                    Print "<th>Materno</th>";
                    Print "<th>Nombre</th>";
                    Print "<th></th>";
                    Print "<th></th>";
                    Print "<th></th>";


            while($this->row = mysql_fetch_array($this->veri)){


                Print "<tr>";Print "<td>".$this->row['his_clinica']."</td> ";
                Print "<td>".$this->row['dni_pac'] . "</td> ";
                Print "<td>".$this->row['pat_pac'] . "</td> ";
                Print "<td>".$this->row['mat_pac'] . "</td> ";
                Print "<td>".$this->row['nom_pac'] . "</td> ";
                Print "<td>";Print "<a href= pac_ver.php?his_clinica=".$this->row['his_clinica'] . ">Detalles</a>";
                print"</td>";
                Print "<td>";Print "<a href= pac_actualizar.php?his_clinica=".$this->row['his_clinica'] . ">Actualizar</a>";
                print"</td>";
                Print "<td>";Print "<a href= pac_eliminar.php?his_clinica=".$this->row['his_clinica'] . ">Eliminar</a>";
                Print "</td></tr>";
           }Print "</table>";

        }else{
            echo "EL PACIENTE NO EXISTE";
        }
    }

    public function verpaciente($his_clinica, $dni_pac)
    {
        $this->his_clinica      =$his_clinica;
        $this->veri = mysql_query("SELECT his_clinica, dni_pac, nom_pac, pat_pac, mat_pac, sexo_pac, fecnac_pac, lugnac_pac, estcivil_pac, domicilio_pac, ref_pac, seguro_pac, tel_pac, email_pac, face_pac, nombre_est, barrio_pac FROM paciente where his_clinica = '".$this->his_clinica."'" ,$this->conexion);


                Print "<table class='table table-striped table-hover table-condensed'>";
                Print "<tr>";
                Print "<th>C.S. SAN AGUSTIN DE CAJAS</th>";

                while($this->row = mysql_fetch_array($this->veri)){
                    Print "<tr>";
                    Print "<th>HISTORIA CLINICA</th>";
                    Print "<td>".$this->row['his_clinica']."</td> ";
                    print "</tr>";
                    Print "<tr>";
                    Print "<th>DNI</th>";
                    Print "<td>".$this->row['dni_pac'] . "</td> ";
                    print "</tr>";
                    Print "<tr>";
                    Print "<th>NOMBRE</th>";
                    Print "<td>".$this->row['nom_pac'] . "</td> ";
                    print "</tr>";
                    Print "<tr>";
                    Print "<th>APELLIDO PATERNO</th>";
                    Print "<td>".$this->row['pat_pac'] . "</td> ";
                    print "</tr>";
                    Print "<tr>";
                    Print "<th>APELLIDO MATERNO</th>";
                    Print "<td>".$this->row['mat_pac'] . "</td> ";
                    print "</tr>";
                    Print "<tr>";
                    Print "<th>SEXO</th>";
                    Print "<td>".$this->row['sexo_pac'] . "</td> ";
                    print "</tr>";
                    Print "<tr>";
                    Print "<th>FECHA DE NACIMIENTO</th>";
                    Print "<td>".$this->row['fecnac_pac'] . "</td> ";
                    print "</tr>";
                    Print "<tr>";
                    Print "<th>LUGAR DE NACIMIENTO</th>";
                    Print "<td>".$this->row['lugnac_pac'] . "</td> ";
                    print "</tr>";
                    Print "<tr>";
                    Print "<th>ESTADO CIVIL</th>";
                    Print "<td>".$this->row['estcivil_pac'] . "</td> ";
                    print "</tr>";
                    Print "<tr>";
                    Print "<th>DOMICILIO</th>";
                    Print "<td>".$this->row['domicilio_pac'] . "</td> ";
                    print "</tr>";
                    Print "<tr>";
                    Print "<th>REFERENCIA</th>";
                    Print "<td>".$this->row['ref_pac'] . "</td> ";
                    print "</tr>";
                    Print "<tr>";
                    Print "<th>SEGURO</th>";
                    Print "<td>".$this->row['seguro_pac'] . "</td> ";
                    print "</tr>";
                    Print "<tr>";
                    Print "<th>TELEFONO</th>";
                    Print "<td>".$this->row['tel_pac'] . "</td> ";
                    print "</tr>";
                    Print "<tr>";
                    Print "<th>EMAIL</th>";
                    Print "<td>".$this->row['email_pac'] . "</td> ";
                    print "</tr>";
                    Print "<tr>";
                    Print "<th>FACEBOOK</th>";
                    Print "<td>".$this->row['face_pac'] . "</td> ";
                    print "</tr>";
                    Print "<tr>";
                    Print "<th>NOMBRE DE ESTABLECIMIENTO QUE PERTENECE</th>";
                    Print "<td>".$this->row['nombre_est'] . "</td> ";
                    print "</tr>";
                    Print "<tr>";
                    Print "<th>BARRIO</th>";
                    Print "<td>".$this->row['barrio_pac'] . "</td> ";
                    print "</tr>";
                    print "</tr>";
                }

                Print "</table>";
    }

    public function actualizapaciente($his_clinica, $sexo_pac)
    {
        $this->his_clinica      =$his_clinica;
        $this->sexo_pac          =$sexo_pac;

        $this->veri = mysql_query("SELECT his_clinica, dni_pac, nom_pac, pat_pac, mat_pac, sexo_pac, fecnac_pac, lugnac_pac, estcivil_pac, domicilio_pac, ref_pac, seguro_pac, tel_pac, email_pac, face_pac, nombre_est, barrio_pac  FROM paciente where his_clinica = '".$this->his_clinica."'" ,$this->conexion);
        //$this->veri2 = mysql_query ("SELECT sexo_pac from paciente");


                Print "<table class='table table-striped table-hover table-condensed'>";
                Print "<tr>";
                Print "<th>C.S. SAN AGUSTIN DE CAJAS</th>";

                Print "<form action='../sal_controladores/pac_actualizar.php' method='post' class='form-horizontal' >";

                while($this->row = mysql_fetch_array($this->veri))
                {
                    Print "<tr>";
                    Print "<th>HISTORIA CLINICA</th>";
                        Print "<td>";
                            Print "<input class='form-control input-sm' type='text' name ='his_clinica' readonly='readonly' value='".$this->row['his_clinica']."'";
                            print "/>" ;
                        Print"</td>";
                    print "</tr>";

                    Print "<tr>";
                    Print "<th>DNI</th>";
                    Print "<td>";
                            Print "<input class='form-control input-sm' type='text' name='dni_pac' value='".$this->row['dni_pac'] ."'";
                            print "/>" ;
                    Print "</td> ";
                    print "</tr>";

                    Print "<tr>";
                    Print "<th>NOMBRE</th>";
                    Print "<td>";
                            Print "<input class='form-control input-sm' type='text' name='nom_pac' value='".$this->row['nom_pac'] ."'";
                            print "/>" ;
                    Print "</td> ";
                    print "</tr>";

                    Print "<tr>";
                    Print "<th>APELLIDO PATERNO</th>";
                    Print "<td>";
                            Print "<input class='form-control input-sm' type='text' name='pat_pac' value='".$this->row['pat_pac'] ."'";
                            print "/>" ;
                    Print "</td> ";
                    print "</tr>";

                    Print "<tr>";
                    Print "<th>APELLIDO MATERNO</th>";
                    Print "<td>";
                            Print "<input class='form-control input-sm' type='text' name='mat_pac' value='".$this->row['mat_pac'] ."'";
                            print "/>" ;
                    Print "</td> ";
                    print "</tr>";

                    Print "<tr>";
                    Print "<th>SEXO</th>";
                    Print "<td>";

                            $sexo_pac = "".$this->row['sexo_pac'] ."";
                            if ($sexo_pac == "M") {
                                Print "<select class='form-control input-sm' name='sexo_pac'>";
                                    Print "<option>";
                                        Print "".$this->row['sexo_pac'] ."";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "F";
                                    Print "</option>";
                                Print "</select>";
                            }else{
                                Print "<select  class='form-control input-sm' name='sexo_pac'>";
                                    Print "<option>";
                                        Print "".$this->row['sexo_pac'] ."";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "M";
                                    Print "</option>";
                                Print "</select>";
                            }


                    Print "</td> ";
                    print "</tr>";

                    Print "<tr>";
                    Print "<th>FECHA DE NACIMIENTO</th>";
                    Print "<td>";
                            Print "<input class='form-control input-sm' type='date' name='fecnac_pac' value='".$this->row['fecnac_pac'] ."'";
                            print "/>" ;
                    Print "</td> ";
                    print "</tr>";

                    Print "<tr>";
                    Print "<th>LUGAR DE NACIMIENTO</th>";
                    Print "<td>";
                            Print "<input class='form-control input-sm' type='text' name='lugnac_pac' value='".$this->row['lugnac_pac'] ."'";
                            print "/>" ;
                    Print "</td> ";
                    print "</tr>";

                    Print "<tr>";
                    Print "<th>ESTADO CIVIL</th>";
                    Print "<td>";
                            //Print "<input class='form-control input-sm' type='text' value='".$this->row['estcivil_pac'] ."'";
                            //print "/>" ;
                            switch ($this->row['estcivil_pac']){
                                case 'S':
                                Print "<select  class='form-control input-sm' name='estcivil_pac'>";
                                    Print "<option>";
                                        Print "".$this->row['estcivil_pac'] ."";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "C";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "V";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "D";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "CN";
                                    Print "</option>";
                                Print "</select>";
                                break;
                                case 'C':
                                Print "<select  class='form-control input-sm' name='estcivil_pac'>";
                                    Print "<option>";
                                        Print "".$this->row['estcivil_pac'] ."";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "S";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "V";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "D";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "CN";
                                    Print "</option>";
                                Print "</select>";
                                break;
                                case 'V':
                                Print "<select  class='form-control input-sm' name='estcivil_pac'>";
                                    Print "<option>";
                                        Print "".$this->row['estcivil_pac'] ."";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "C";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "S";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "D";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "CN";
                                    Print "</option>";
                                Print "</select>";
                                break;
                                case 'D':
                                Print "<select  class='form-control input-sm' name='estcivil_pac'>";
                                    Print "<option>";
                                        Print "".$this->row['estcivil_pac'] ."";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "C";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "S";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "V";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "CN";
                                    Print "</option>";
                                Print "</select>";
                                break;
                                case 'CN':
                                Print "<select  class='form-control input-sm' name='estcivil_pac'>";
                                    Print "<option>";
                                        Print "".$this->row['estcivil_pac'] ."";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "C";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "S";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "V";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "D";
                                    Print "</option>";
                                Print "</select>";
                                break;
                            }
                    Print "</td> ";
                    print "</tr>";

                    Print "<tr>";
                    Print "<th>DOMICILIO</th>";
                    Print "<td>";
                            Print "<input class='form-control input-sm' type='text' name='domicilio_pac' value='".$this->row['domicilio_pac'] ."'";
                            print "/>" ;
                    Print "</td> ";
                    print "</tr>";

                    Print "<tr>";
                    Print "<th>REFERENCIA</th>";
                    Print "<td>";
                            Print "<input class='form-control input-sm' type='text' name='ref_pac' value='".$this->row['ref_pac'] ."'";
                            print "/>" ;
                    Print "</td> ";
                    print "</tr>";

                    Print "<tr>";
                    Print "<th>SEGURO</th>";
                    Print "<td>";
                            //Print "<input class='form-control input-sm' type='text' value='".$this->row['seguro_pac'] ."'";
                            //print "/>" ;
                            switch ($this->row['seguro_pac']){
                                case 'SIS':
                                Print "<select  class='form-control input-sm' name='seguro_pac'>";
                                    Print "<option>";
                                        Print "".$this->row['seguro_pac'] ."";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "ESSALUD";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SOAT";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SANIDAD FAP";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SANIDAD NAVAL";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SANIDAD EP";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SANIDAD PNP";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "PRIVADOS";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "OTROS";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "EXONERADO";
                                    Print "</option>";
                                Print "</select>";
                                break;
                                case 'ESSALUD':
                                Print "<select  class='form-control input-sm' name='seguro_pac'>";
                                    Print "<option>";
                                        Print "".$this->row['seguro_pac'] ."";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SIS";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SOAT";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SANIDAD FAP";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SANIDAD NAVAL";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SANIDAD EP";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SANIDAD PNP";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "PRIVADOS";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "OTROS";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "EXONERADO";
                                    Print "</option>";
                                Print "</select>";
                                break;
                                case 'SOAT':
                                Print "<select  class='form-control input-sm' name='seguro_pac'>";
                                    Print "<option>";
                                        Print "".$this->row['seguro_pac'] ."";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SIS";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "ESSALUD";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SANIDAD FAP";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SANIDAD NAVAL";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SANIDAD EP";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SANIDAD PNP";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "PRIVADOS";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "OTROS";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "EXONERADO";
                                    Print "</option>";
                                Print "</select>";
                                break;
                                case 'SANIDAD FAP':
                                Print "<select  class='form-control input-sm' name='seguro_pac'>";
                                    Print "<option>";
                                        Print "".$this->row['seguro_pac'] ."";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SIS";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "ESSALUD";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SOAT";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SANIDAD NAVAL";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SANIDAD EP";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SANIDAD PNP";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "PRIVADOS";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "OTROS";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "EXONERADO";
                                    Print "</option>";
                                Print "</select>";
                                break;
                                case 'SANIDAD NAVAL':
                                Print "<select  class='form-control input-sm' name='seguro_pac'>";
                                    Print "<option>";
                                        Print "".$this->row['seguro_pac'] ."";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SIS";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "ESSALUD";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SOAT";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SANIDAD FAP";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SANIDAD EP";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SANIDAD PNP";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "PRIVADOS";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "OTROS";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "EXONERADO";
                                    Print "</option>";
                                Print "</select>";
                                break;
                                case 'SANIDAD EP':
                                Print "<select  class='form-control input-sm' name='seguro_pac'>";
                                    Print "<option>";
                                        Print "".$this->row['seguro_pac'] ."";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SIS";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "ESSALUD";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SOAT";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SANIDAD FAP";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SANIDAD NAVAL";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SANIDAD PNP";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "PRIVADOS";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "OTROS";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "EXONERADO";
                                    Print "</option>";
                                Print "</select>";
                                break;
                                case 'SANIDAD PNP':
                                Print "<select  class='form-control input-sm' name='seguro_pac'>";
                                    Print "<option>";
                                        Print "".$this->row['seguro_pac'] ."";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SIS";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "ESSALUD";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SOAT";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SANIDAD FAP";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SANIDAD NAVAL";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SANIDAD EP";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "PRIVADOS";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "OTROS";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "EXONERADO";
                                    Print "</option>";
                                Print "</select>";
                                break;
                                case 'PRIVADOS':
                                Print "<select  class='form-control input-sm' name='seguro_pac'>";
                                    Print "<option>";
                                        Print "".$this->row['seguro_pac'] ."";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SIS";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "ESSALUD";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SOAT";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SANIDAD FAP";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SANIDAD NAVAL";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SANIDAD EP";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SANIDAD PNP";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "OTROS";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "EXONERADO";
                                    Print "</option>";
                                Print "</select>";
                                break;
                                case 'OTROS':
                                Print "<select  class='form-control input-sm' name='seguro_pac'>";
                                    Print "<option>";
                                        Print "".$this->row['seguro_pac'] ."";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SIS";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "ESSALUD";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SOAT";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SANIDAD FAP";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SANIDAD NAVAL";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SANIDAD EP";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SANIDAD PNP";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "PRIVADOS";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "EXONERADO";
                                    Print "</option>";
                                Print "</select>";
                                break;
                                case 'EXONERADO':
                                Print "<select  class='form-control input-sm' name='seguro_pac'>";
                                    Print "<option>";
                                        Print "".$this->row['seguro_pac'] ."";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SIS";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "ESSALUD";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SOAT";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SANIDAD FAP";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SANIDAD NAVAL";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SANIDAD EP";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "SANIDAD PNP";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "PRIVADOS";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "OTROS";
                                    Print "</option>";
                                Print "</select>";
                                break;
                            }

                    Print "</td> ";
                    print "</tr>";

                    Print "<tr>";
                    Print "<th>TELEFONO</th>";
                    Print "<td>";
                            Print "<input class='form-control input-sm' type='text' name='tel_pac' value='".$this->row['tel_pac'] ."'";
                            print "/>" ;
                    Print "</td> ";
                    print "</tr>";

                    Print "<tr>";
                    Print "<th>EMAIL</th>";
                    Print "<td>";
                            Print "<input class='form-control input-sm' type='text' name='email_pac' value='".$this->row['email_pac'] ."'";
                            print "/>" ;
                    Print "</td> ";
                    print "</tr>";

                    Print "<tr>";
                    Print "<th>FACEBOOK</th>";
                    Print "<td>";
                            Print "<input class='form-control input-sm' type='text' name='face_pac' value='".$this->row['face_pac'] ."'";
                            print "/>" ;
                    Print "</td> ";
                    print "</tr>";

                    Print "<tr>";
                    Print "<th>NOMBRE DEL ESTABLECIMIENTO</th>";
                    Print "<td>";
                            Print "<input class='form-control input-sm' type='text' name='nombre_est' value='".$this->row['nombre_est'] ."'";
                            print "/>" ;
                    Print "</td> ";
                    print "</tr>";

                    Print "<tr>";
                    Print "<th>BARRIO</th>";
                    Print "<td>";
                            //Print "<input class='form-control input-sm' type='text' value='".$this->row['barrio_pac'] ."'";
                            //print "/>" ;
                            switch ($this->row['barrio_pac']){
                                case 'NINGUNO':
                                Print "<select  class='form-control input-sm' name='barrio_pac'>";
                                    Print "<option>";
                                        Print "".$this->row['barrio_pac'] ."";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO I";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO II";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO III";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO IV";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO V-YAULI";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BELLA VISTA";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "VISTA ALEGRE";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "POR VENIR";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "COILLOR";
                                    Print "</option>";
                                Print "</select>";
                                break;
                                case 'BARRIO I':
                                Print "<select  class='form-control input-sm' name='barrio_pac'>";
                                    Print "<option>";
                                        Print "".$this->row['barrio_pac'] ."";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "NINGUNO";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO II";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO III";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO IV";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO V-YAULI";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BELLA VISTA";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "VISTA ALEGRE";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "POR VENIR";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "COILLOR";
                                    Print "</option>";
                                Print "</select>";
                                break;
                                case 'BARRIO II':
                                Print "<select  class='form-control input-sm' name='barrio_pac'>";
                                    Print "<option>";
                                        Print "".$this->row['barrio_pac'] ."";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "NINGUNO";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO I";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO III";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO IV";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO V-YAULI";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BELLA VISTA";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "VISTA ALEGRE";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "POR VENIR";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "COILLOR";
                                    Print "</option>";
                                Print "</select>";
                                break;
                                case 'BARRIO III':
                                Print "<select  class='form-control input-sm' name='barrio_pac'>";
                                    Print "<option>";
                                        Print "".$this->row['barrio_pac'] ."";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "NINGUNO";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO I";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO II";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO IV";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO V-YAULI";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BELLA VISTA";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "VISTA ALEGRE";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "POR VENIR";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "COILLOR";
                                    Print "</option>";
                                Print "</select>";
                                break;
                                case 'BARRIO IV':
                                Print "<select  class='form-control input-sm' name='barrio_pac'>";
                                    Print "<option>";
                                        Print "".$this->row['barrio_pac'] ."";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "NINGUNO";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO I";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO II";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO III";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO V-YAULI";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BELLA VISTA";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "VISTA ALEGRE";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "POR VENIR";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "COILLOR";
                                    Print "</option>";
                                Print "</select>";
                                break;
                                case 'BARRIO V-YAULI':
                                Print "<select  class='form-control input-sm' name='barrio_pac'>";
                                    Print "<option>";
                                        Print "".$this->row['barrio_pac'] ."";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "NINGUNO";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO I";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO II";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO III";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO IV";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BELLA VISTA";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "VISTA ALEGRE";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "POR VENIR";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "COILLOR";
                                    Print "</option>";
                                Print "</select>";
                                break;
                                case 'BELLAVISTA':
                                Print "<select  class='form-control input-sm' name='barrio_pac'>";
                                    Print "<option>";
                                        Print "".$this->row['barrio_pac'] ."";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "NINGUNO";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO I";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO II";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO III";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO IV";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO V-YAULI";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "VISTA ALEGRE";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "POR VENIR";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "COILLOR";
                                    Print "</option>";
                                Print "</select>";
                                break;
                                case 'VISTA ALEGRE':
                                Print "<select  class='form-control input-sm' name='barrio_pac'>";
                                    Print "<option>";
                                        Print "".$this->row['barrio_pac'] ."";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "NINGUNO";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO I";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO II";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO III";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO IV";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO V-YAULI";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BELLA VISTA";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "POR VENIR";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "COILLOR";
                                    Print "</option>";
                                Print "</select>";
                                break;
                                case 'PORVENIR':
                                Print "<select  class='form-control input-sm' name='barrio_pac'>";
                                    Print "<option>";
                                        Print "".$this->row['barrio_pac'] ."";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "NINGUNO";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO I";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO II";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO III";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO IV";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO V-YAULI";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BELLA VISTA";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "VISTA ALEGRE";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "COILLOR";
                                    Print "</option>";
                                Print "</select>";
                                break;
                                case 'COILLOR':
                                Print "<select  class='form-control input-sm' name='barrio_pac'>";
                                    Print "<option>";
                                        Print "".$this->row['barrio_pac'] ."";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "NINGUNO";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO I";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO II";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO III";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO IV";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BARRIO V-YAULI";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "BELLA VISTA";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "VISTA ALEGRE";
                                    Print "</option>";
                                    Print "<option>";
                                        Print "POR VENIR";
                                    Print "</option>";
                                Print "</select>";
                                break;
                            }

                    Print "</td> ";
                    print "</tr>";

                    //Print "<tr>";
                    //    Print "<td>";
                    //        Print "<input type='submit' value='Actualizar datos'>";
                    //    Print "</td>";
                    //Print "</tr>";
                    //<div class="col-md-12">
                    //  <button class="btn btn-primary btn-xs">BUSCAR PACIENTE</button>
                    //</div>
                    Print "<tr>";
                        Print "<td>";
                    Print "<div class='col-md-12'>";
                        Print "<button class='btn btn-primary btn-xs'>";
                            Print "ACTUALIZAR DATOS";
                        Print "</button";
                    Print "</div>";
                        Print "</td>";
                    Print "</tr>";


                }
                Print "</form>";

                Print "</table>";
    }

    public function eliminarpaciente($his_clinica)
    {
        $this->his_clinica      =$his_clinica;
      //  $this->sexo_pac          =$sexo_pac;

        $this->veri = mysql_query("SELECT his_clinica FROM paciente where his_clinica = '".$this->his_clinica."'" ,$this->conexion);
        Print "<table class='table table-striped table-hover table-condensed'>";
        Print "<tr>";
        Print "<th>C.S. SAN AGUSTIN DE CAJAS</th>";
        Print "<form action='../sal_controladores/pac_eliminar.php' method='post' class='form-horizontal' >";
                while($this->row = mysql_fetch_array($this->veri)){
                    Print "<tr>";
                    Print "<th>HISTORIA CLINICA</th>";
                    //Print "<td>".$this->row['his_clinica']."</td> ";
                    Print "<td>";
                            Print "<input class='form-control input-sm' type='text' name ='his_clinica' readonly='readonly' value='".$this->row['his_clinica']."'";
                            print "/>" ;
                    Print "</td>";
                    Print "</tr>";

                    Print "<tr>";
                        Print "<td>";
                            Print "<div class='col-md-12'>";
                                Print "<button class='btn btn-primary btn-xs'>";
                                    Print "ELIMINAR DATOS";
                                Print "</button>";
                            Print "</div>";
                        Print "</td>";
                    Print "</tr>";
                }
        Print "</form>";
        Print "</table>";
    }
    public function directorio(){

        $this->cone=mysql_query("SELECT nombre_est FROM establecimiento" , $this->conexion);
        $this->cone1=mysql_query("SELECT nombre_est FROM personal" , $this->conexion);
        //$variable = echo $_SESSION['nombre_est'];

        //$this->cone3=mysql_query("SELECT dni_per, nom_per, pat_per, mat_per, tel_per, nombre_est FROM personal WHERE estado_per='ACTIVO' ORDER BY nombre_est, dni_per DESC" , $this->conexion);
        $this->cone3=mysql_query("SELECT dni_per, nom_per, pat_per, mat_per, tel_per, nombre_est FROM personal WHERE estado_per='ACTIVO' ORDER BY nombre_est, dni_per DESC" , $this->conexion);

        //if (echo $_SESSION['nombre_est'] = mysql_fetch_array($this->cone1)){

            Print "<table class='table table-striped table-hover table-condensed'>";

                    Print  "<tr>"; Print "<th>DNI</th>";
                    Print "<th>Nombre</th>";
                    Print "<th>Paterno</th>";
                    Print "<th>Materno</th>";
                    Print "<th>Telefono</th>";
                    Print "<th>Establecimiento</th>";

            while($this->row = mysql_fetch_array($this->cone3))
            {

                print "<tr>";Print "<td>".$this->row['dni_per']."</td> ";
                Print "<td>".$this->row['nom_per'] . "</td> ";
                Print "<td>".$this->row['pat_per'] . "</td> ";
                Print "<td>".$this->row['mat_per'] . "</td> ";
                Print "<td>".$this->row['tel_per'] . "</td> ";
                Print "<td>".$this->row['nombre_est'] . "</td> ";
                Print "</tr>";

            } Print "</table>";
        //}
    }
}
 ?>
