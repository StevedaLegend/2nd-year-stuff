public class HotelDriver {

    public static void main(String[] args) {

        // 0 means vacant
        // 1 means occupied

        HotelRoom roomA = new HotelRoom();

        // sets the room numbers
        roomA.setRoomNumber(200);
        roomA.setRoomType("Single");
        roomA.setOccupied(1);
        roomA.setRate(100);

        //prints out room number
        System.out.println(roomA);

        HotelRoom roomB = new HotelRoom();

        // sets room B number
        roomB.setRoomNumber(201);
        roomB.setRoomType("Double");
        roomB.setOccupied(0);
        roomB.setRate(80);

        System.out.println(roomB);

        // says that there is nobody occupied in room C and the room number is 202 and 0 means false

        HotelRoom roomC = new HotelRoom(202, "Single", 0, 90);

        //Sets room C number
        roomC.setRoomNumber(202);
        roomC.setRoomType("Single");
        roomC.setOccupied(0);
        roomC.setRate(90);

        System.out.println(roomC);
        

        if (roomB.isOccupied())
        {

            System.out.println("roomB is Occupied");
        }
        else 
        {
            System.out.println("roomB is not Occupied");

            roomB.setOccupied(1);

            System.out.println("Room B is now in occupiation: " + roomB.getOccupied());
        }
    }
}
