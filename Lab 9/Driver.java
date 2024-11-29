public class Driver {


    public static void main(String[] args) {

        LibraryItem[] items = new LibraryItem[3];

        Book b1 = new Book(" Authur ", " Wizard of OZ ", 68);

    

        items[0] = new CD (" Grojband ", " Hell ", 4);

        items[1] = b1;
        
        for(LibraryItem li: items) System.out.println(li);
    }


}
