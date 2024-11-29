public class Point {


        private double x;
        private  double y;


        public Point(double x, double y){

            this.x = x;
            this.y = y;
        }


        public  double setX(double x){

            return this.x = x;
        }

        public double setY(double y){

            return this.y = y;
        }

        public double getX(){

            return x;
        }

        public double getY(){

            return y;
        }

        public String toString(){

            return ("(" + x + ", " + y +")");
        }
        

}
