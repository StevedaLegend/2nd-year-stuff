import java.io.BufferedReader;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Scanner;

public class menuapplication {

    public static void main(String[] args) throws IOException {

        try (Scanner scan = new Scanner(System.in)) {

            // using the while loop it creates a while loop which can loop around the graph after it has been used by any number
            while (true) {
                System.out.println("1. Load graph from file");
                System.out.println("2. Insert edge");
                System.out.println("3. Search for edge");
                System.out.println("4. Load sites from file");
                System.out.println("5. Find closest site");
                System.out.println("6. Quit");

                System.out.print("Enter your a number:");
                int choice = scan.nextInt();
                scan.nextLine();

                // First switch in the code choice case uses the import java.io.FileReader; and opens up the text file thats in the current path or to make a path to thet text file
                switch (choice) {
                    case 1:
                        try {
                            File myObj = new File("opengraph.txt");
                            Scanner myReader = new Scanner(myObj);
                            while (myReader.hasNextLine()) {
                                String data = myReader.nextLine();
                                System.out.println(data);
                            }
                // The my reader closes then if the file is not found it uses import java.io.FileNotFoundException; and prints out an error if a number that not in the menu is used 
                            myReader.close();
                        } catch (FileNotFoundException e) {
                            System.out.println("An error occurred.");
                            e.printStackTrace();
                        }
                        break;
                // Using buffer reader it opens the text file and then the system asks which site you want to view then uses the array list string to read each line of the file 
                    case 2:

                        try {
                            FileReader fileReader = new FileReader("opengraph.txt");
                            BufferedReader bufferedReader = new BufferedReader(fileReader);

                            System.out.print("What site do you want to view?");
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
                // When the line is found it prints out the matches found in the text file and how many matches are found in it and prints out what the user asks for in the text file
                            System.out.println("Matches found: " + matchList.size());
                            for (String match : matchList) {
                                System.out.println(match);
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
                        break;

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

                        } catch (Exception e) {
                            e.printStackTrace();
                        }
                        break;

                    case 5:
                        try {
                            FileReader fileReader = new FileReader("Close sites.txt");
                            BufferedReader bufferedReader = new BufferedReader(fileReader);

                            System.out.print("Enter in a Site:");
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
                        break;

                    case 6:
                        System.out.println("Exiting......");
                        System.exit(0);
                        break;
                }

            }
        }

    }
}
