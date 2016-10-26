/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Controladora;

import interfaz.Opciones;
import Dominio.Encender;
import Dominio.MotorComun;
import Dominio.MotorEconomico;
import Dominio.MotorElectricoAdapter;

/**
 *
 * @author Cristopher
 */
public class Controladora {
    
    private Opciones opciones;
    private MotorComun motorComun;
    private MotorEconomico motorEconomico;
    private MotorElectricoAdapter motorElectrico;
    private Encender encender;
    
    public Controladora(){
        this.opciones=new Opciones();
        this.encender= new Encender();
    }
    
    
    public void controlar(){
        
        int opcion = opciones.preguntarOpcion();
        
            switch(opcion) {
    
                case 1:
                    this.motorComun=new MotorComun();                 
                    encender.usarMotor(motorComun);
                    break;
                case 2:
                     this.motorEconomico=new MotorEconomico();
                 
                    encender.usarMotor(motorEconomico);
                    break;
                case 3:
                    this.motorElectrico= new MotorElectricoAdapter();
                    encender.usarMotor(motorElectrico);
                    break;
                case 4:
                    System.out.println("¡Cerrando programa!");
                    break;
                default:
                    System.out.println("La opción ingresada NO es válida.");
            }
            System.out.print("\n\n");
  
    }
    
}
