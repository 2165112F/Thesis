import java.util.Scanner;
 
public class Rank {
	public static void main(String[] args) {
		Scanner in = new Scanner(System.in);
 
		int n = in.nextInt();
		int [] sumas = new int[n];
		int sum = 0, position = 1;
 
		for (int i=0; i<sumas.length; i++) {
		 	int a = in.nextInt();
		 	int b = in.nextInt();
		 	int c = in.nextInt();
		 	int d = in.nextInt();
		 	sum = a+b+c+d;
		 	sumas[i] = sum;
		}
 
		for (int j=0; j<sumas.length; j++) {
			if (sumas[0] < sumas[j]) {
				position++;				
			}			
		}
 
		System.out.println(position);
		
	}