public class Circle extends Shape{


   
    private String name;
    private double radius;
    private String colour; 



    public Circle(String name, String colour, double radius){

        super(name, colour);

        this.radius = radius;
        this.name = name;
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


    @Override

    public double area() {

        return  radius * radius;
    }




  
}
