<?php
use Illuminate\Mail\Mailer;

class ContactController extends \BaseController
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function sendMail()
    {

        $bodyMail = array(
            'full_name' => \Input::get('full_name'),
            'phone' => \Input::get('phone'),
            'description' => \Input::get('description')
        );

        $view = \View::make('emails.welcome', array('bodyMail' => $bodyMail));

        $transport = Swift_SmtpTransport::newInstance('relay-hosting.secureserver.net', 25)
            ->setUsername('blinizeka@gmail.com')
            ->setPassword('palidhje');

        $mailer = Swift_Mailer::newInstance($transport);
        $bodyMail = array(
            'full_name' => \Input::get('full_name'),
            'phone' => \Input::get('phone'),
            'description' => \Input::get('description')
        );
        $message = Swift_Message::newInstance('Palidhje')
            ->setFrom(array('blinizeka@gmail.com'  => 'emiratesgraphic.com'))
            ->setTo(array('blinizeka@gmail.com'  => 'emiratesgraphic.com'))
            ->setBody($view, 'text/html');

// Send the message
        $result = $mailer->send($message);

    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


}
