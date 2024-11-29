/* Prints the larger of two integers*/

int larger(int, int);

int larger(int a, int b)
{
    /* Returns  the larger of two ints passed as arguements */


    if  (a > b) {

        return a;
    }   
        else {
        
        return b;
        }
}


int main () {

    int inA, inB, result, choice; 
    inA = 5;
    inB = 6; 

    result = larger(inA, inB), 
    printf("The larger of %d and %d" , inA , inB); 
    printf("is %d" , result);
    scanf_s("%d", &choice);
    return 0;
}