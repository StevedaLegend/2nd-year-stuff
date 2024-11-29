import java.io.BufferedReader;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Scanner;

public class updated {

    public static void main(String[] args) throws IOException {

        Scanner scan = new Scanner(System.in);

        while (true) {
            System.out.println("1. Load graph from file");
            System.out.println("2. Insert edge");
            System.out.println("3. Search for edge");
            System.out.println("4. Load sites from file");
            System.out.println("5. Find closest site");
            System.out.println("6. Quit");

            System.out.print("Enter a number: ");
            int choice = scan.nextInt();
            scan.nextLine();

            switch (choice) {
                case 1:
                    try {
                        File myObj = new File("test.txt");
                        Scanner myReader = new Scanner(myObj);
                        while (myReader.hasNextLine()) {
                            String data = myReader.nextLine();
                            System.out.println(data);
                        }
                        myReader.close();
                    } catch (FileNotFoundException e) {
                        System.out.println("An error occurred.");
                        e.printStackTrace();
                    }
                    break;

                case 2:
                    try {
                        FileReader fileReader = new FileReader("test.txt");
                        BufferedReader bufferedReader = new BufferedReader(fileReader);

                        System.out.print("What site do you want to view? ");
                        String answer = scan.nextLine();
                        String view = answer;

                        String searchTerm = view;

                        ArrayList<String> matchList = new ArrayList<>();

                        String line;
                        while ((line = bufferedReader.readLine()) != null) {
                            if (line.contains(searchTerm)) {
                                matchList.add(line);
                            }
                        }

                        System.out.println("Matches found: " + matchList.size());
                        for (String match : matchList) {
                            System.out.println("-----------------");
                            System.out.println(match);
                            System.out.println("-----------------");
                        }
                        bufferedReader.close();

                    } catch (Exception e) {
                        e.printStackTrace();
                    }
                    break;
                
                    case 3:
                        try {
                        FileReader fileReader = new FileReader("Searchforedge.txt");
                        BufferedReader bufferedReader = new BufferedReader(fileReader);
                        //String searchTerm = "X";
        
                        System.out.print("Insert an edge for the site:");
                        String answer = scan.nextLine();
                        String view = answer;
        
                        String searchTerm = view;
        
                        ArrayList<String> matchList = new ArrayList<>();
        
                        String line;
                        while ((line = bufferedReader.readLine()) != null) {
                            if (line.contains(searchTerm)) {
                                matchList.add(line);
                            }
                        }
        
                        System.out.println("Matches found: " + matchList.size());
                        for (String match : matchList) {
                            System.out.println(match);
                        }
                        bufferedReader.close();
        
                    } catch (Exception e) {
                        e.printStackTrace();
                    }

                
                    case 4:
                        try {
                            FileReader fileReader = new FileReader("displaySites.txt");
                            BufferedReader bufferedReader = new BufferedReader(fileReader);
                            // String searchTerm = "X";

                            System.out.print("Display Site: ");
                            String answer = scan.nextLine();
                            String view = answer;

                            String searchTerm = view;

                            ArrayList<String> matchList = new ArrayList<>();

                            String line;
                            while ((line = bufferedReader.readLine()) != null) {
                                if (line.contains(searchTerm)) {
                                    matchList.add(line);
                                }
                            }

                            System.out.println("Matches found: " + matchList.size());
                            for (String match : matchList) {
                                System.out.println("-----------------");
                                System.out.println(match);
                                System.out.println("-----------------");
                            }
                            bufferedReader.close();

                        }catch(
                        Exception e)
                        {
                            e.printStackTrace();
                        }
                        break;
                        
                    // case 5:
                    // System.out.print("Enter X and Y");
                    // int x = scan.nextInt();
                    // int y = scan.nextInt();
                    // scan.nextLine();

                    case 6:
                    return;
                }
            }
        }
    }
