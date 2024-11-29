public class Book extends LibraryItem {

    public String author; 
    public String title;
    public int numpages;

    public Book( String author, String title, int numpages){

        this.author = author;
        this.title = title;
        this.numpages = numpages;
    }

    @Override
    public double setcalculatePrice() {

        return numpages * 4;
    }

    public String toString(){

        return "Author:  " + author + "Title: " + title + "Number of pages: " + numpages;
    }
}
