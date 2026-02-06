import java.util.Scanner;

public class StringManipulation {
    public static void main(String[] args) {

        Scanner sc = new Scanner(System.in);

        String str1 = sc.nextLine();
        String str2 = sc.nextLine();

        System.out.println("Length: " + str1.length());
        System.out.println("Concat: " + str1.concat(str2));
        System.out.println("charAt(1): " + str1.charAt(1));

        char[] ch = new char[str1.length()];
        str1.getChars(0, str1.length(), ch, 0);
        System.out.println("getChars: " + new String(ch));

        System.out.println("compareTo: " + str1.compareTo(str2));
        System.out.println("equals: " + str1.equals(str2));
        System.out.println("equalsIgnoreCase: " + str1.equalsIgnoreCase(str2));
        System.out.println("startsWith(A): " + str1.startsWith("A"));
        System.out.println("endsWith(a): " + str1.endsWith("a"));
        System.out.println("contains(a): " + str1.contains("a"));
        System.out.println("indexOf(a): " + str1.indexOf('a'));
        System.out.println("toUpperCase: " + str1.toUpperCase());
        System.out.println("toLowerCase: " + str1.toLowerCase());
        System.out.println("replace(a,x): " + str1.replace('a','x'));

        String intInput = sc.nextLine();
        Integer intValue = Integer.valueOf(intInput);
        System.out.println("Integer: " + intValue);

        String doubleInput = sc.nextLine();
        Double doubleValue = Double.valueOf(doubleInput);
        System.out.println("Double: " + doubleValue);

        sc.close();
    }
}