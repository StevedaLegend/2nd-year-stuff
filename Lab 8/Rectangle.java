public class Rectangle extends Shape {


    private String name;
    private double height;
    private String colour; 
    private double base;



    public Rectangle(String name, String colour, double height, double base){

        super(name , colour);

        this.name = name;
        this.height = height;
        this.colour = colour;

    }

    public void setname(String name){

        this.name = name;
    }

    public String getname(){

        return name;
    }

    public void setcolour( String colour){

        this.colour = colour;
    }

    public String getcolour(){

        return colour; 
    }
   
    public void setheight(double height){

        this.height = height;
    }

    public double getheight(){

        return height;
    }
    
    public void setbase(double base){

        this.base = base;

    }

    public double getbase(){

        return base;
    }

    @Override
    public double area() {
        
        return 15.0 * 20.0;
    }

}
