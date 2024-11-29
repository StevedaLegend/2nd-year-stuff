public class RectangleDrive {

        public static void main(String[] args) {

                // creating a new rectangle in the method
                Rectangle rectangle1 = new Rectangle();

                // setting the length and the width of the rectangle
                rectangle1.setlength(39);
                rectangle1.setwidth(9);
                rectangle1.printRectangle();

                // prints out the Perimeter and Area of the Rectangle
                System.out.println("The Perimeter of the rectangle is " + rectangle1.getPerimeter());
                System.out.println("The Area of the rectangle is " + rectangle1.getArea());

                // prints out the rectangle size of the length and width
                System.out.println(rectangle1);

        }

}
