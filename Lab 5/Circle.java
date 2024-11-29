public class Circle {

        private int radius;

    
    
         public Circle(int radius) {


            this.radius = radius;
        }

        public Circle(int radius, int j, int k) {
        }

        public int setRadius(int radius){

            return this.radius = radius;
        }
        
        public int  getRadius(){

            return radius;
        }
        
        public String toString(){
    
            return "radius:   " + radius;
        }
    }
    

