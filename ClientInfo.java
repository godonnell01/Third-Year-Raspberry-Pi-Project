package project.cit.ie.hmsapp;

import java.util.ArrayList;

/**
 * Created by Sean on 26/04/2016.
 */
public class ClientInfo {
    private ArrayList<String> emails = new ArrayList<String>();
    private ArrayList<String> addresses = new ArrayList<String>();
    private ArrayList<String> names = new ArrayList<String>();


    public ClientInfo(){
        addClientInfo();

    }

    private void addClientInfo(){
        emails.add("sean.p.collins@mycit.ie");
        addresses.add("25 Melbourne Court, Cork");
        names.add("Sean Collins");
        emails.add("colin.ryan2@mycit.ie");
        addresses.add("12 Melbourne Mews, Cork");
        names.add("Colin Ryan");
        emails.add("g.odonnell@mycit.ie");
        addresses.add("4 Melbourne Road, Cork");
        names.add("George O'Donnell");
        emails.add("daniel.b.coughlan@mycit.ie");
        addresses.add("31 Rossa Avenue, Cork");
        names.add("Daniel Coughlan");
    }

    public String getAddress(String email){
        for(int x = 0 ; x < emails.size(); x++){
            System.out.println(email);
            System.out.println(this.emails.get(x).toString());
            System.out.println("incorrect");
            if(email.equalsIgnoreCase(this.emails.get(x).toString())){
                System.out.println("correct");
                return this.addresses.get(x).toString();
            }
        }
        return null;
    }

    public String getName(String email){
        for(int x = 0 ; x < emails.size(); x++){
            System.out.println(email);
            System.out.println(this.emails.get(x).toString());
            System.out.println("incorrect");
            if(email.equalsIgnoreCase(this.emails.get(x).toString())){
                System.out.println("correct");
                return this.names.get(x).toString();
            }
        }
        return null;
    }
}
