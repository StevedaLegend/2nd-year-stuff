public class Values {
    
    public static void main(String[] args) 
    {
        int[] my_array = { 10, 14 , 15, 18, 19, 20, 22, 23, 24, 25};
 
        for (int i = 0; i < my_array.length-1; i++)
        {
            for (int j = i+1; j < my_array.length; j++)
            {
                if ((my_array[i] == my_array[j]) && (i != j))
                {
                
                    System.out.println("Duplicate Element : "+my_array[j]);  
                }
            }
        }
    }    
}

 