public class Address {

    private String street;
    private String city;
    private String country;


    Address(){}


    public Address(String street, String city, String country){

        this.street = street;
        this.city = city;
        this.country = country;
    }
    
    public String getstreet() {

        return this.street;
    }

    public String setstreet(String street) {

        return this.street = street;
    }

    public String getcity() {

        return this.city;
    }

    public String setcity(String city) {

        return this.city = city;
    }

    public String getcountry() {

        return this.country;
    }

    public String setcountry(String country) {

        return this.country = country;
    }

    public String toString() {

        return "Street:   " + street + "City:  " + city + "Country:  " + country;
    }

}
