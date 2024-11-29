public class Cylinder extends ThreeDShape {


    private String name;
    private int radius;
    private String colour; 
    private double base;
    private int height;



    public Cylinder(String name, String colour, int radius, int height){


        super(name, colour);

        this.radius = radius;
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
   
    public void setheight(int height){

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
		
		return (2*22*(radius + height));
	}

    @Override
    public double volume() {

        return 6 * 6 * 8;
    }
}