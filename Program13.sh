import java.util.Scanner;

class Student {
    int roll;
    String name;
    int academicScore;

    Student(int r, String n, int a) {
        roll = r;
        name = n;
        academicScore = a;
    }
}

interface Sports {
    int sportsScore = 0;

    void setSportsScore(int s);
    int getSportsScore();
}

class Result extends Student implements Sports {

    int sportsScore;

    Result(int r, String n, int a) {
        super(r, n, a);
    }

    public void setSportsScore(int s) {
        sportsScore = s;
    }

    public int getSportsScore() {
        return sportsScore;
    }

    void display() {
        System.out.println("Roll No: " + roll);
        System.out.println("Name: " + name);
        System.out.println("Academic Score: " + academicScore);
        System.out.println("Sports Score: " + sportsScore);
        System.out.println("Total Score: " + (academicScore + sportsScore));
    }
}

public class Program13 {
    public static void main(String[] args) {

        Scanner sc = new Scanner(System.in);

        System.out.print("Enter Roll No: ");
        int r = sc.nextInt();
        sc.nextLine();

        System.out.print("Enter Name: ");
        String n = sc.nextLine();

        System.out.print("Enter Academic Score: ");
        int a = sc.nextInt();

        System.out.print("Enter Sports Score: ");
        int s = sc.nextInt();

        Result obj = new Result(r, n, a);
        obj.setSportsScore(s);

        obj.display();
    }
}