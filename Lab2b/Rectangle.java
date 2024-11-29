public class Rectangle {

        private int length;
        private int width;

        // constructor of rectangle to define lengt and width set to 1

        void Rectangle1() {

                this.length = 1;
                this.width = 1;
        }

        // the settor and gettor methods of length, width, Area and Perimeter.

        public void Rectangle1(int length, int width) {

                this.length = length;
                this.width = width;
        }

        public int getlength() {

                return length;
        }

        // verify that length are each numbers larger than 0.0 and less than
        // or equal to 40.0.
        public void setlength(int length) {

                if (length >= 0 && length <= 40.0) {

                        this.length = length;

                } else {

                        System.out.println("  Length is not in range  ");
                }
        }

        public int getwidth() {

                return width;
        }

        // verify that width are each numbers larger than 0.0 and less than
        // or equal to 40.0.

        public void setwidth(int width) {
                
                if (width >= 0 && width <= 40.0) {

                        this.width = width;

                } else {

                        System.out.println("  Width is not in range   ");
                }
        }

        double getArea() {

                return length * width;
        }

        double getPerimeter() {

                return length + width;
        }

        // prints out the length and the width of the rectangle

        public String toString() {
                return "Length = " + length + " Width = " + width;
        }

        // prints out the rectangle in stars in the terminal

        public void printRectangle() {

                for (int y = 1; y <= length; y++)

                {

                        for (int x = 1; x <= width; x++) {

                                if (x == 1 || x == width || y == 1 || y == length)

                                        System.out.print("* ");
                                else
                                        System.out.print("  ");
                        }
                        System.out.print("\n");

                }

        }
}
