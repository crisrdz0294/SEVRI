/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package interfaz;

import javax.swing.JOptionPane;

/**
 *
 * @author Cristopher
 */
public class Opciones {
    
   public int preguntarOpcion(){
    
    String valor;
    int opcion;
  
    
      valor=JOptionPane.showInputDialog("MENÚ DE OPCIONES\n"
               +"---- -- --------\n"
               +"1. Encender motor común.\n"
               +"2. Encender motor económico.\n"
               +"3. Encender motor eléctrico.\n"
               +"4. Salir.\n"
               +"Seleccione opción: ");
      
     
        opcion=Integer.parseInt(valor);
     
    return opcion;
  }
    
}
