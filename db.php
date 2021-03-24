<!--CONEXION A BASE DE DATOS-->

<?php #Uso del PDO: idea es descentralizar el codigo de un solo lugar y tenerlo optimizado para reutilizarlo después.
class DB{   #Estructura o molde para crear objetos(propiedades y los metodos) 
    #creamos nuestras variables
    #private: variables solo van a ser accesibles dentro de esa estructura de clase 
    private $host;
    private $db;   
    private $user;
    private $password;
    private $charset;  #conjunto de caracteres para poder conectarnos a BD.

    public function __construct(){   #CONSTRUCTOR: funcion que se ejecuta cuando creamos un nuevo objeto
                                    #public:se ejecuta fuera del contexto de la otra clase 
        $this->host = 'localhost';       #this:hace referencia al contexto de la clase(DB), es decir this podemos usarlo 
        $this->db = 'plantas_data_HS';   #para buscar internamente las variables. -> : indica que this se va a transformar en el
        $this->user = 'root';            #acceso a esa clase. y en host ya no es necesario el signo del dolar
        $this->password = '';       #en sintesis.. cuando yo creo un nuevo objeto de base de datos el constructor va a llamar al 
        $this->charset = 'utf8mb4'; #constructor, va a llenar las variables de valores y va a hacer todo.
    }
    public function connect(){
        try{    #estructura q permite validar lo que hay dentro de las llaves,si hay error se va a ejecutar la funcion catch
            $connection = "mysql:host=" . $this->host . ";dbname=". $this->db . ";charset=" . $this->charset;
                            #driver       
            $options = [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
                                      #le daremos valor . para q PDO me permita obtener errores de una forma mas sintactica 
                        PDO::ATTR_EMULATE_PREPARES=>false];
            $pdo=new PDO($connection, $this->user, $this->password, $options);  #creamos nuestro objeto
            return $pdo;          #este objeto contiene la conexion a nuestra base de datos
        }catch(PDOException $e){  #muestra error o realiza actividaddes en caso la rutina no funcione 
            print_r("Error connection: " . $e->getMessage());
        }
    }
}

?>