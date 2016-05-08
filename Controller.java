package project.cit.ie.hmsapp;

import android.os.AsyncTask;
import android.util.Log;

import org.apache.http.HttpResponse;
import org.apache.http.client.HttpClient;
import org.apache.http.client.methods.HttpGet;
import org.apache.http.impl.client.DefaultHttpClient;

/**
 * Created by Sean on 18/03/2016.
 * This controller class is used as a means of running and handling
 * all httpRequests. Each method is linked to a specific button press
 * on the MainAppActivity page.
 */
public class Controller {


    piTask task = null;

    // Sets request url to the arm php script
    // Creates and executes task with arm script request
    public void armAlarm(){
        String URL = "http://192.168.1.24/functions/arm.php";
        task = new piTask(URL);
        task.execute((Void) null);

    }

    // Sets request url to the disarm php script
    // Creates and executes task with arm script request
    public void disarmAlarm(){
        String URL = "http://192.168.1.24/functions/disarm.php";
        task = new piTask(URL);
        task.execute((Void) null);

    }

    // Sets request url to the sound php script
    // Creates and executes task with arm script request
    public void testAlarm(){
        String URL = "http://192.168.1.24/functions/sound_test.php";
        task = new piTask(URL);
        task.execute((Void) null);

    }

    // Sets request url to the toggle light php script, pointing to the pi pin '16'
    // Creates and executes task with arm script request
    public void hallwayLight(){
        String URL = "http://192.168.1.24/functions/toggle_light.php?pin=16";
        task = new piTask(URL);
        task.execute((Void) null);

    }

    // Sets request url to the toggle light php script, pointing to the pi pin '21'
    // Creates and executes task with arm script request
    public void kitchenLight(){
        String URL = "http://192.168.1.24/functions/toggle_light.php?pin=21";
        task = new piTask(URL);
        task.execute((Void) null);

    }

    //Class used for executing all httpRequests, extends Asynctask
    class piTask extends AsyncTask<Void, Void, Boolean> {

        String URL;

        //Default constructor for piTask class
        public piTask(String URL){
            //Sets request URL
            this.URL = URL;
        }

        @Override
        protected Boolean doInBackground(Void... params) {

            HttpClient httpclient = new DefaultHttpClient();
            try {
                //Executes request URL
                HttpResponse response = httpclient.execute(new HttpGet(URL));
            }
            catch (Exception e){
                Log.e("log_tag", "Error in http connection " + e.toString());
            }

            try {
                // Simulate network access.
                Thread.sleep(2000);
            } catch (InterruptedException e) {
                return false;
            }

            return true;
        }

        @Override
        protected void onPostExecute(final Boolean success) {
            //Clears task after request has been executed
            task = null;
        }
    }

}
