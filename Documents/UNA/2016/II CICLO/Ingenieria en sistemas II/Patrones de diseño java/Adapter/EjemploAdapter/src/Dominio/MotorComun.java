package Dominio;

public class MotorComun extends Motor {

    public MotorComun(){
        super();
        System.out.println("Creando motor común...");
    }

   
    public void encender() {
        System.out.println("Encendiendo motor común.");
    }

    
    public void acelerar() {
        System.out.println("Acelerando motor común.");
    }

    
    public void apagar() {
        System.out.println("Apagando motor común.");
    }
}

