import java.util.Scanner;

public class learnJava {
    public static void main(String argv[]){
      Scanner input = new Scanner(System.in);
      int n = input.nextInt();
      int ans = 1;
  
      for(int i = n; i >= 1; i --){
          ans *= i;
      }
      System.out.println(ans);
      }
    }
