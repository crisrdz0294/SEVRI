package Dominio;

public class MotorEconomico extends Motor {

    public MotorEconomico(){
        super();
        System.out.println("Creando motor económico...");
    }

    
    public void encender() {
        System.out.println("Encendiendo motor económico.");
    }

    
    public void acelerar() {
        System.out.println("Acelerando el motor económico.");
    }

    
    public void apagar() {
        System.out.println("Apagando motor económico.");
    }
}

