public class Triangle extends Shape {


    private String name;
    private double base;
    private double height;
    private String colour; 



    public Triangle(String name, double base, double height, String colour){

        super(name, colour);

        this.name = name;
        this.base = base;
        this.height = height;
        this.colour = colour;

    }

    public void setname(String name){

        this.name = name;
    }

    public String getname(){

        return name;
    }


    public void setbase(double base){

        this.base = base;

    }

    public double getbase(){

        return base;
    }
    
    public void setheight(double height){

        this.height = height;
    }

    public double getheight(){

        return height;
    }

    public void setcolour( String colour){

        this.colour = colour;
    }

    public String getcolour(){

        return colour; 
    }

    @Override
    
    public double area() {
 
        return 0.5 * base * height;
    }
}
