

public  class  CD extends LibraryItem{

    public String band;
    public String title;
    public int numtracks;


    public CD( String band, String title, int numtracks){

        this.band = band; 
        this.title = title; 
        this.numtracks = numtracks;
    }


    @Override
    public double setcalculatePrice() {

        return numtracks * 1.5;
    }

    public String toString(){

        return "Band: " + band + "Title: " + title + "Number of tracks: " + numtracks;
    }
}
