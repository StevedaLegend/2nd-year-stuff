public class Sphere extends ThreeDShape {


    private String name;
    private double radius;
    private String colour; 



    public Sphere(String name, String colour, int radius){

        super(name, colour);

        this.name = name;
        this.radius = radius;
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
   
    public void setheight(int radius){

        this.radius = radius;
    }

    public double getheight(){

        return radius;
    }

    @Override
    public double volume() {
 
        return (4/3)*3.14*(radius*radius*radius);
    }

    @Override
    public double area() {

        return 4*3.14*(radius*radius);
    }
}
