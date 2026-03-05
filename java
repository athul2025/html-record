import java.util.Scanner;

class CPU {

    int price;

    class Processor {
        int cores;
        String manufacturer;
    }

    static class RAM {
        int memory;
        String manufacturer;
    }
}

public class Program9 {

    public static void main(String[] args) {

        Scanner sc = new Scanner(System.in);

        CPU cpu = new CPU();             // CPU object
        CPU.Processor p = cpu.new Processor(); // inner class object
        CPU.RAM r = new CPU.RAM();       // static class object

        System.out.print("Enter CPU price: ");
        cpu.price = sc.nextInt();

        System.out.print("Enter processor cores: ");
        p.cores = sc.nextInt();

        System.out.print("Enter processor manufacturer: ");
        p.manufacturer = sc.next();

        System.out.print("Enter RAM memory: ");
        r.memory = sc.nextInt();

        System.out.print("Enter RAM manufacturer: ");
        r.manufacturer = sc.next();

        System.out.println("CPU Price: " + cpu.price);
        System.out.println("Processor Cores: " + p.cores);
        System.out.println("Processor Manufacturer: " + p.manufacturer);
        System.out.println("RAM Memory: " + r.memory);
        System.out.println("RAM Manufacturer: " + r.manufacturer);
    }
}