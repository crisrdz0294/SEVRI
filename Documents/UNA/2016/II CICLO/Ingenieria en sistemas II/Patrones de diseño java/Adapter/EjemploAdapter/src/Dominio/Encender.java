/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Dominio;

/**
 *
 * @author Cristopher
 */
public class Encender {
    
    public void usarMotor(Motor motor) {
        motor.encender();
        motor.acelerar();
        motor.apagar();
    }
    
}
