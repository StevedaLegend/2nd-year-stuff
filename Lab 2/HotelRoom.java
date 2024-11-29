public class HotelRoom {

    // private variables
    private int roomNumber;
    private String roomType;
    private int occupied;
    private double rate;

    HotelRoom() {}

    public HotelRoom(int roomNumber, String roomType, int occupied, double rate) {
        this.roomNumber = roomNumber;
        this.roomType = roomType;
        this.occupied = occupied;
        this.rate = rate;
    }

    public int getRoomNumber() {
        return roomNumber;
    }

    public void setRoomNumber(int roomNumber) {
        this.roomNumber = roomNumber;
    }

    public String getRoomType() {
        return roomType;
    }

    public void setRoomType(String roomType) {
        this.roomType = roomType;
    }

    public double getRate() {
        return rate;
    }

    public void setRate(double rate) {
        this.rate = rate;
    }

    public int getOccupied() {
        return occupied;
    }

    public void setOccupied(int occupied) {
        if (!isOccupied()) {
            this.occupied = occupied;
        }
    }

    public boolean isOccupied() {

        if (occupied==1)
            {

          return true;

            }
        else
            {

            return false;

            }

        



    }
    public String toString() {
        return "HotelRoom " +  "roomNumber=" + roomNumber + ", roomType='" + roomType + '\'' + ", occupied=" + occupied + ", rate=" + rate + ", isOccupied=" + isOccupied();
    }
}
